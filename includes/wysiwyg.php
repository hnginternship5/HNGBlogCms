<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <div class="row d-flex flex-column post-section">
                <textarea class="post-input" type="text" name="post-input" placeholder="What’s happening?"></textarea>

                <div class="row mx-0 d-flex flex-row mt-auto justify-content-between">
                    <div class="post-action-right">
                        <button class="tool fa fa-underline"  onclick="document.execCommand('underline', false, '');"></button>
                        <button class="tool fa fa-italic" onclick="document.execCommand('italic', false, '');"></button>
                        <button class="tool fa fa-bold" onclick="document.execCommand('bold', false, '');"></button>
                        <button class="tool fas fa-cut" onclick="document.execCommand('cut',false,'')"></button>
                        <button class="tool fas fa-strikethrough" onclick="document.execCommand('strikeThrough',false,'')"></button>
                        <button class="tool fa fa-trash" onclick="document.execCommand('delete',false,'')"></button>
                        <button class="tool fab fa-scribd" onclick="document.execCommand('selectAll',false,'')"></button>
                        <button class="tool fa fa-align-center" onclick="document.execCommand('justifyCenter',false,'')"></button>
                        <button class="tool fa fa-align-left" onclick="document.execCommand('justifyLeft',false,'')"></button>
                        <button class="tool fa fa-align-right" onclick="document.execCommand('justifyRight',false,'')"></button>  
                    </div>

                    <div class="post-action-left">
                        <i class="fas fa-paperclip"></i>
                        <a class="post-action-item" href="#css"><img src="assets/img/mic.svg"></a>
                        <i class="fas fa-link"></i>
                        <button class="btn btn-info post-action-item">Publish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-0 d-flex flex-row align-items-center  justify-content-between">
        <div class="col-md-8 line ml-md-5"></div>
        <div class="col d-inline-flex mr-md-5 flex-row justify-content-between">
            <p class="post-filter"><span class="post-filter-title">Sort by:</span> Most Recent Posts</p>
            <img src="assets/img/caret.svg">
        </div>
    </div>
</div>