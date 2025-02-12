<?php
include './include/header.php'
?>

<main>
    <div class="container">
        <form action="">
        <label class="d-block" for="profile_img_input"><img style="width: 200px; border-radius: 50%; margin-left: 20px; margin-top: 50px;" src="https://api.dicebear.com/9.x/initials/svg?seed=<?= $_SESSION['auth']['fname'] ?>" alt="profile" alt="" class="img-fluid rounded-circle profile_image""></label>
        <input class="d-none" type="file" id="profile_img_input">

        
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