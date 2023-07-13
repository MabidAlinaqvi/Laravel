<h1>Upload Your File</h1> <br><br>
<form action="uploadcontrol" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="upload"> <br><br>
    <button type="submit">Upload</button>
</form>