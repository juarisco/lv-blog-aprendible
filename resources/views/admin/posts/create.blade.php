<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf    
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">@lang('Post Title')</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group @error('title') has-error @enderror">
                        <input type="text"
                            class="form-control" 
                            name="title" 
                            id="title" 
                            value="{{ old('title') }}"
                            placeholder="{{ __('Enter here post title') }}" autofocus>
                        
                        @error('title')
                            <span class="help-block" role="alert">
                                {{ $message }}
                            </span>
                        @enderror                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">@lang('Save Post')</button>
                </div>
            </div>
        </div>
    </form>    
</div>    