<!DOCTYPE html>
    <html lang="es">

    <?php
        include "views/modules/navigation.php";
    ?>
<body>

    <div class="container">        
        <div class="row">

            <div class="col-sm-4">
                <section>
                    <?php
                        $mvc = new MvcController();
                        $mvc->enlacesPaginasController();
                    ?>
                </section>
            </div>
            
        </div>
        
    </div>

</body>
</html>