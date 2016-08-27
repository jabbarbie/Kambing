<div class="modal fade" id="tambahUnit" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{ $judul }}</h4>
      </div>
      <div class="modal-body">
        @include($form)
      </div>
      
    </div>
  </div>
</div>
