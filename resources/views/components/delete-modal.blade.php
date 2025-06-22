<div class="modal fade flip" id="deleteItem" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-5 text-center">
                <lord-icon 
                    src="https://cdn.lordicon.com/gsqxdxog.json" 
                    trigger="loop" 
                    colors="primary:#405189,secondary:#f06548" 
                    style="width: 90px; height: 90px;">
                </lord-icon>

                <div class="mt-4 text-center">
                    <h4>You are about to delete <span class="modal-title"></span>!</h4>
                    <p class="text-muted fs-15 mb-4">{{ $message }}</p>

                    <div class="hstack gap-2 justify-content-center remove">
                        <!-- Close Button -->
                        <button class="btn light btn-rounded btn-info" data-bs-dismiss="modal">
                            <i class="ri-close-line me-1 align-middle"></i> Close
                        </button>

                        <!-- Form with dynamic method -->
                        <form action="{{ $route }}" method="POST">
                            @csrf
                            @if($method !== 'post')
                                @method($method)
                            @endif
                            <input type="hidden" name="id" id="delete-id" />
                            <button type="submit" class="btn light btn-rounded btn-danger">
                                <i class="fa fa-trash me-1"></i> Yes, delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        $('#deleteItem').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var title = button.data('title');    // Extract the title
            var id = button.data('id');          // Extract the ID

            var modal = $(this);
            modal.find('.modal-title').text(title);
            modal.find('#delete-id').val(id);
        });
    });
</script>
