<script>
    //show success notification in 5s
    //$("#success").show(3000).hide();
    // $(document).ready(function(){
    //     $("#success").show(0).delay(5000).hide(1000);
    // });
</script>
<div id="success" style="background: #d5ebad; padding: 5px 10px 0 10px; border: 1px solid #a2d246;border-radius: 5px;
    margin-bottom: 10px">
    <p style="font-size: 20px;"><i class="fa fa-check"></i> <?php if(isset($success)) echo $success; ?></p>
</div>