@extends('admin.index')

@section('main')
    <div class="row">
        <div class="col">
            <form action="/dashboard/photo/individual/aksiEditIndividual" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$dataSiswa->class_id}}">
            <div class="card info-card">
                <div class="card-body" style="margin-top: 15px;">
                    <div class="mb-3">
                        <label class="form-label" style="color: #012970;">Nama Siswa</label>
                        <input type="text" class="form-control" placeholder="Nama Siswa" name="nama" value="{{ $dataSiswa->student_name }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #012970;">Quotes Siswa</label>
                        <textarea class="form-control" rows="3" name="quotes">{{ $dataSiswa->quotes }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #012970;">Foto Siswa</label>
                        <input class="form-control" type="file" id="formFile" name="foto_siswa" onchange=" previewFile(this)">

                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <div>
                                <p>Photo Sebelumnya : </p>
                                <img src="{{ Storage::url($dataSiswa->photo) }}" alt="Foto Sebelumnya {{ $dataSiswa->student_name }}" width="250px">
                            </div>
                            <div id="preview" class="d-none">
                                <p>Photo Yang Akan Diganti : </p>
                                <img id="previewImg" width="250px">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn" style="background-color: #012970; color:white;">Upload</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    
    <script src="/js/jquery/jquery.min.js"></script>
    <script>
        
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
        $("#preview").removeClass("d-none")
    }

    </script>
@endsection