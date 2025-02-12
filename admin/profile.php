<?php
include './include/header.php'
?>

<main>
    <div class="container">


        </form>
    </div>
</main>
<?php
include './include/footer.php'
?>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#profile_img_input').change(function() {
            let file = $(this)[0].files[0]
            let url = URL.createObjectURL(file)
            $('.profile_image').attr('src', url)


        })

    })
</script>