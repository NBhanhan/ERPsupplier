<li>
  <a href="{{ route('suppliers.show', $supplier->id )}}" class="suppliername">{{ $supplier->name }}</a>
  <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-sm btn-danger delete-btn">DELETE</button>
  </form>
</li>
