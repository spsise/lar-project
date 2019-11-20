
    <div class="accordion" id="accordionExample{{ $id }}">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{ $id }}" aria-expanded="true" aria-controls="collapseOne{{ $id }}">
                        {{ $title }}
                    </button>
                </h2>
            </div>
        
            <div id="collapseOne{{ $id }}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample{{ $id }}">
                <div class="card-body">
                        {{ $text }}
                </div>
            </div>
        </div>
        
    </div>
