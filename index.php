<?php
$productos = [
    [
        'nombre' => 'Pastel de fresa',
        'precio' => '$320',
        'descripcion' => 'Sabor intenso, decorado con fresas frescas.',
    ],
    [
        'nombre' => 'Pastel de chocolate',
        'precio' => '$360',
        'descripcion' => 'Capas suaves de chocolate con ganache.',
    ],
    [
        'nombre' => 'Pastel de vainilla',
        'precio' => '$300',
        'descripcion' => 'Clásico, ligero y perfecto para cualquier ocasión.',
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasteles</title>
    <meta name="description" content="Pastelería artesanal con sabores irresistibles.">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <nav class="nav container">
            <div class="brand">Pasteles</div>
            <div class="nav-links">
                <a href="#inicio">Inicio</a>
                <a href="#productos">Productos</a>
                <a href="#contacto">Contacto</a>
            </div>
        </nav>
    </header>

    <main id="inicio">
        <section class="hero">
            <div class="container hero-content">
                <div>
                    <p class="eyebrow">Pastelería artesanal</p>
                    <h1>Hechos con amor y sabor.</h1>
                    <p class="lead">Diseñamos pasteles para cumpleaños, eventos y momentos especiales.</p>
                    <a class="btn-primary" href="#productos">Ver sabores</a>
                </div>
                <div class="hero-card">
                    <span class="badge">Más vendidos</span>
                    <h3>Pastel de fresa</h3>
                    <p>Ideal para celebraciones con un toque dulce y fresco.</p>
                    <strong>$320 MXN</strong>
                </div>
            </div>
        </section>

        <section id="productos" class="products">
            <div class="container">
                <h2>Nuestros pasteles</h2>
                <div class="product-grid">
                    <?php foreach ($productos as $producto): ?>
                        <article class="product-card">
                            <div class="product-image">🍰</div>
                            <h3><?php echo htmlspecialchars($producto['nombre']); ?></h3>
                            <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                            <div class="product-footer">
                                <span><?php echo htmlspecialchars($producto['precio']); ?></span>
                                <button type="button">Pedir</button>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="contacto" class="contact">
            <div class="container contact-box">
                <div>
                    <p class="eyebrow">Contacto</p>
                    <h2>Hagamos tu próximo pastel.</h2>
                </div>
                <a class="btn-primary" href="mailto:ventas@pasteles.com">ventas@pasteles.com</a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>© <span id="year"></span> Pasteles. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="assets/js/app.js"></script>
</body>
</html>
