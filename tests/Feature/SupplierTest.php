<?php

namespace Tests\Feature;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Supplier;
use App\Models\Item;
class SupplierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testIndex()
    {
        $response = $this->call('GET', '/suppliers');
        $this->assertEquals(200, $response->status());
    }

    public function testShow()
	{
        $id = 7;
        $start = '2017-02-13 05:41:42';
        $end = '2017-02-20 11:03:53';
        $supplier = Supplier::where('id', '=', 7)->firstOrFail();
        $this->assertEquals('Hazel', $supplier->name);
        $this->assertEquals(523, \App\Models\Supplier::findTotalSpend($id,$start,$end));
	}

    public function testSearch()
    {
      $supplier = Supplier::where('name', '=', 'Hazel')->count();
      $this->assertEquals(2, $supplier);
    }

    public function testCreate()
    {
        $post_data=array('name' => 'Elly', 'contactNum' => '1111111111', 'email' => 'targetchina@gmail.com', 'address' => '66 Kensington Road Kensington', 'note' => 'test');
        \App\Models\Supplier::storeModel($post_data);
        $supplier = Supplier::where('name', '=', 'Elly')->firstOrFail();
        $this->assertEquals('1111111111', $supplier->contactNum);
    }

    public function testEdit()
    {
        $id = Supplier::where('name', '=', 'Elly')->value('id');
        $post_data=array('name' => 'Elly6', 'contactNum' => '1111111116', 'email' => 'targetchina6@gmail.com', 'address' => '66 Kensington Road Kensington', 'note' => 'test');
        \App\Models\Supplier::updateModel($id,$post_data);
        $supplier = Supplier::where('name', '=', 'Elly6')->firstOrFail();
        $this->assertEquals('1111111116', $supplier->contactNum);
    }

    public function testDestroy()
    {
        $id = Supplier::where('name', '=', 'Elly6')->value('id');
        \App\Models\Supplier::destroyModel($id);
    }

}
