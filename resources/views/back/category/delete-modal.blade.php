@foreach ($categories as $item)
<div class="modal fade" id="modalDelete{{$item -> id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <form action="{{url('categories/'.$item->id)}}" method="post">
                @method('DELETE')
                @csrf
                <div class="mb-3">
                    <div class="row">
                        <div class="col text-center">
                            <h3>Are You sure</h3>
                            <h2 class="text-danger"><b>DELETE</b></h2>
                            <h3>"{{$item->name}}" categories?</h3>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">YES</button>
                </div>
            </form>
        </div>

      </div>
    </div>
  </div>

@endforeach
