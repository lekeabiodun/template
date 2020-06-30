<div class="col-xl-3 col-md-4 col-sm-6 col-xs-6 info-panel">
    <a href="{{ url($url??'') }}" class="text-decoration-none">
        <div class="card card-shadow">
            <div class="card-block bg-white p-20">
                <button type="button" class="btn btn-floating btn-sm btn-{{ $color?? 'primary' }}"> <i class="{{$icon??''}}"></i> </button>
                <span class="ml-15 font-weight-400">{{ $title?? '' }}</span>
                <div class="content-text text-center mb-0">
                    <span class="font-size-40 font-weight-100">{{$count?? ''}}</span>
                    <p class="blue-grey-400 font-weight-100 m-0">{{ $subTitle??'' }}</p>
                </div>
            </div>
        </div>
    </a>
</div>