
<div class="d-flex align-center justify-content-center mt-5 pt-5" id="show-element">
    <div class="typing d-none">
		<form action="{{ route('contact') }}" method="POST" id="contact-us">
			@csrf
			<input type="hidden" name="color" value="{{ $color }}">
			<a role="button" class="text-decoration-none" id="submit-form" onmouseover="$(this).addClass('text-{{ $color }}')" onmouseout="$(this).removeClass('text-{{ $color }}')">On en discute ?</a> 
		</form>
    </div>
</div>
@section('typing-scripts')
<script>
document.getElementById("submit-form").onclick = function() {
    document.getElementById("contact-us").submit();
}
window.addEventListener('scroll', function() {
	var element = document.querySelector('#show-element');
	var position = element.getBoundingClientRect();

	// checking whether fully visible
	if(position.top >= 0 && position.bottom <= window.innerHeight) {
		$('.typing').removeClass('d-none')
	}

});
</script>
@endsection