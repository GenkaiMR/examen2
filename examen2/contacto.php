<?php include "includes/header.php"?>
    <section>
            <h2>Contacto</h2>
            <!-- IMAGEN -->
    </section>
    <section>
        <h2>
            Llena el formulario de contacto
        </h2>
        <form action="">
            <fieldset>
                <legend>informacion personal</legend>
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Escribe tu nombre">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="tu@email.com">
                </div>
                <div>
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" id="telefono" placeholder="555-555-5555">
                </div>
                <div>
                    <label for="msg">Mensaje</label>
                    <textarea name="msg" id="msg" placeholder="Escribe un mensaje"></textarea>
                </div>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <div>
                    <label for="vencom">Vende compra</label>
                    <input type="select" name="vencom" id="vencom">
                </div>
                <div>
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad">
                </div>
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <div>
                    <label for="telefono">Telefono</label>
                    <input type="radio" name="telefono" id="telefono">
                    <label for="e-mail">Email</label>
                    <input type="radio" name="e-mail" id="e-mail">
                </div>
                <div>
                    <label for="fecha">Fecha</label>
                    <input type="date" name="fecha" id="fecha">
                    <label for="hora">Hora</label>
                    <input type="time" name="hora" id="hora">
                </div>
            </fieldset>
            
            <div>
                <button>Contactar</button>
            </div>
        </form>

    </section>

<?php include "includes/footer.php"?>