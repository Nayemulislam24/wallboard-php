<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Users</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Users List</li>
            </ol>
        </nav>
    </div>

</div>

<!--end breadcrumb-->
<div class="row">
    <div class="col-xl-12 mx-auto">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body">
                <div id="drag-drop-area"></div>
            </div>
        </div>
    </div>
</div>
<!--end row-->

<script type="module">
    import {Uppy, Core, Dashboard, Tus, XHRUpload} from "https://releases.transloadit.com/uppy/v3.5.0/uppy.min.mjs"
    var uppy = new Uppy()
    .use(Dashboard, {
        inline: true,
        target: '#drag-drop-area'
    })
    .use(XHRUpload, {endpoint: 'http://localhost/raw/phpBoilerPlate/actions/tus_action.php'})

    uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
    })
</script>