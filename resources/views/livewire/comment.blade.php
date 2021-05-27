<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="form mb-3">
                <form wire:submit.prevent="addComment">
                    <div class="form-row">
                        <div class="col-10">
                            <input type="text" class="form-control" wire:model.lazy="comment" placeholder="Write Your Comment">
                        </div>
                        <div class="col text-right">
                            <button type="submit" class="btn btn-primary mb-2">ADD NEW</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    ALL COMMENTS
                </div>
            </div>
            @foreach($comments as $comment)
                <div class="card mb-2">
                    <div class="card-header">
                        {{ $comment['created_by'] }}
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $comment['content'] }}</p>
                        <div class="text-right">
                            <a href="#">{{ $comment['created_at'] }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
