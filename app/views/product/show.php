<?php include 'app/views/shares/header.php'; ?>

<div class="container mt-5">
    <?php if (!empty($product)): ?>
        <h1><?php echo htmlspecialchars($product->name); ?></h1>
        <p><?php echo htmlspecialchars($product->description); ?></p>
        <p>Giá: <?php echo htmlspecialchars($product->price); ?> VND</p>
        <p>Danh mục: <?php echo htmlspecialchars($product->category_name); ?></p>

        <?php if (!empty($product->image)): ?>
            <img src="/webbanhang/public/images/<?php echo htmlspecialchars($product->image); ?>" alt="Ảnh sản phẩm" style="max-height: 300px;">
        <?php else: ?>
            <p><em>Không có ảnh sản phẩm.</em></p>
        <?php endif; ?>
    <?php else: ?>
        <p class="text-danger">Không tìm thấy sản phẩm.</p>
    <?php endif; ?>
</div>

<?php include 'app/views/shares/footer.php'; ?>
