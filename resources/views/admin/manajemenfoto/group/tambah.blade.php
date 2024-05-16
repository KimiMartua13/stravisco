@extends('admin.index')

@section('main')
<div class="row">
    <div class="col">
        <form action="/dashboard/photo/tambah/group/aksiTambah" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card info-card">
                <div class="card-body" style="margin-top: 15px;">
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Pilih kelas</label>
                        <select class="form-select" name="kelas">
                            @foreach ($kelas as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelas" class="form-label">Pilih Tipe Foto</label>
                        <select class="form-select" name="type_foto">
                            @foreach ($tipe as $item)
                                <option value="{{ $item['value'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="color: #012970;">Foto Group</label>
                        <input class="form-control" type="file" id="formFile" name="foto_group" onchange="previewFile(this)">
                    </div>
                    <div class="mb-3">
                        <div class="d-flex">
                            <div id="preview" class="d-none">
                                <p>Photo Yang Akan Dipakai : </p>
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