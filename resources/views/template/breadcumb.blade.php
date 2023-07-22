<div class="row page-titles mx-0">
    <div class="col p-md-0">
        <ol class="breadcrumb">
            @if (isset($title_parent))
                <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $title_parent }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ $title_top }}</a></li>
            @endif
        </ol>
    </div>
</div>
