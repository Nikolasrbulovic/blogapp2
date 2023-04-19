
    <div class="col">
      <div class="card shadow-sm">
        <img src="{{$post->img_url}}" alt="postimg" width="200px" height="200px">
        <div class="card-body">
          <p class="card-text">{{$post->body}}</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <a href='/{{$post->id}}' type="button" class="btn btn-sm btn-outline-secondary">View</a>
              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
            <small class="text-body-secondary">9 mins</small>
          </div>
        </div>
      </div>
    </div>