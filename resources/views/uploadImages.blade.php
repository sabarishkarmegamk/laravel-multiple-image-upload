<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1,   shrink-to-fit=no">
<title>Multiple Image upload</title>
</head>
<body>
<div>
<h3>Upload a Images</h3>
<hr>
<form method="POST" action="{{ route('products.uploadproducts') }}" enctype="multipart/form-data" >
{{ csrf_field() }}
<div >
<label>Name</label>
<input type="text" name="name" placeholder="Enter Product Name">
<label>Discription</label>
<textarea name="description" rows="4" >
</textarea></div>
<div >
<label>Choose Images</label>
<input type="file"  name="images" multiple>
</div>
<hr>
<button type="submit" >Submit</button>
</form>
</div>
</body>
</html>
