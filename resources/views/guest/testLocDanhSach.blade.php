<form method="post" action="{{ asset('loc-danh-sach') }}">
	{{ csrf_field() }} 
	<input type="text" name="cheDoLoc">
	<input type="text" name="giaTriLoc">
	<input type="submit" name="loc" value="loc">
</form>