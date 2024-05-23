<footer class="footer">
    <div class="footer-content">
        <p class="m-b-0">Bản quyền thuộc về © 2023 Nhom4 Web bán Đồ Gia Dụng</p>
    </div>
</footer>

</div>
</div>
</div>
<!-- Vendors JS -->
<script src="assets/js/vendors.min.js"></script>
<!-- page js -->
<script src="assets/js/pages/dashboard-default.js"></script>
<script src="assets/js/app.min.js"></script>
<script src="https://kit.fontawesome.com/e83fa8cc93.js" crossorigin="anonymous"></script>
<!-- jequery valication -->
<script src="assets/vendors/jquery-validation/jquery.validate.min.js"></script>
<!-- slect -->
<script src="assets/vendors/select2/select2.min.js"></script>
<!-- Jequery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor5/40.0.0/ckeditor.min.js" integrity="sha512-Zyl/SvrviD3rEMVNCPN+m5zV0PofJYlGHnLDzol2kM224QpmWj9p5z7hQYppmnLFhZwqif5Fugjjouuk5l1lgA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#mota'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
        ClassicEditor
        .create(document.querySelector('#thongso'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
        ClassicEditor
        .create(document.querySelector('#conten'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
</body>

</html>