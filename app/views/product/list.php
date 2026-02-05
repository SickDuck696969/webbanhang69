<?php include 'app/views/shares/header.php'; ?>

<style>
    body {
        background-color: #1a1a1a;
        color: #f8f8f8;
    }

    .card {
        background-color: #2b2b2b;
        color: #fff;
        border: 1px solid #8b0000;
        border-radius: 15px;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.02);
        border-color: #ff4c4c;
    }

    .btn-primary, .btn-success {
        background-color: #8b0000;
        border: none;
    }

    .btn-primary:hover, .btn-success:hover {
        background-color: #ff4c4c;
    }

    .btn-warning {
        background-color: #d97706;
        border: none;
    }

    .btn-warning:hover {
        background-color: #f59e0b;
    }

    .btn-danger {
        background-color: #991b1b;
        border: none;
    }

    .btn-danger:hover {
        background-color: #dc2626;
    }
</style>

<div class="container mt-5">
    <h1 class="mb-4">Danh sách sản phẩm</h1>
    <a href="/webbanhang/product/add" class="btn btn-success mb-4">➕ Thêm sản phẩm mới</a>

    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="text-decoration-none text-danger">
                                <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                            </a>
                        </h4>
                        <p class="card-text"><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="card-text">💰 <strong><?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?> VND</strong></p>
                        <?php if (!empty($product->category_name)): ?>
                            <p class="text-muted">Danh mục: <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Sửa</a>
                        <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                            Xóa
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
