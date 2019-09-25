<section class="formulario">
            <h2 class="title">
                    ¡SOLICITA TU CRÉDITO EMPRESARIAL!
            </h2>
            <form id="form_cotizacion">
                    <div class="form-group">
                        <label for="">¿Cuánto necesitas?</label>
                        <input type="text" id="monto_form" name="monto" required>
                    </div>
                    <div class="form-group">
                        <label for="">Un plazo de *</label>
                        <select id="plazo_form" name="plazo" required>
                            <option value="12 meses">12 meses</option>
                            <option value="24 meses">24 meses</option>
                            <option value="36 meses">36 meses</option>
                            <option value="48 meses">48 meses</option>
                            <option value="60 meses">60 meses</option>
                            <option value="72 meses">72 meses</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nombre *</label>
                        <input type="text" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Correo *</label>
                        <input type="email" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="">Ventas anuales de tu negocio *</label>
                        <select name="ventas" id="" required>
                            <option value="">Selecciona aquí</option>
                            <option value="Sin empresa">Aún no tengo empresa</option>
                            <option value="$1-$500,000">$1 - $500,000</option>
                            <option value="$1 millón - $10 millones">$1 millón - $10 millones</option>
                            <option value="$10 millones - $20 millones">$10 millones - $20 millones</option>
                            <option value="$20 millones - $50 millones">$20 millones - $50 millones</option>
                            <option value="Más de $50 millones">Más de $50 millones</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Teléfono</label>
                        <input type="phone" name="telefono" required>
                    </div>
            </form>
            <div class="terminos">
                <input type="checkbox" id="terminos"> He leído y acepto los <span>términos y condiciones *</span>
            </div>
            <div class="boton">
                <button type="submit" form="form_cotizacion">SOLICITAR</button>
            </div>
        </section>