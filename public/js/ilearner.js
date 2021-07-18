<script>
    //initializing the select option for dropdown
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
});

    // Or with jQuery

    $(document).ready(function(){
    $('select').formSelect();
});

</script>

<script>
    var instance = M.FormSelect.getInstance(elem);
</script>
