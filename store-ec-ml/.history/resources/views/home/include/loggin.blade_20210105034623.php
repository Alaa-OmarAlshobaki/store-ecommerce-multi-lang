@guest()
<div id="" class="modal fade in not-loggedin-modal" style="display: none; padding-right: 17px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            You must be logged in to manage your wishlist
          </div>
        
        </div>
      </div>
    {{-- <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="material-icons close">close</i>
                </button>
            </div>
            <div class="modal-body">You must be logged in to manage your wishlist.</div>
        </div>
    </div> --}}
</div>
@endguest()