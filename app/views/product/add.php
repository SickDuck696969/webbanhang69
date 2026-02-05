<?php include __DIR__ . '/../shares/header.php'; ?>

<style>
    body {
        background-color: #1a1a1a;
        color: #f8f8f8;
    }

    .form-control {
        background-color: #2b2b2b;
        color: #fff;
        border: 1px solid #444;
    }

    .form-control:focus {
        border-color: #ff4c4c;
        box-shadow: 0 0 5px rgba(255, 76, 76, 0.5);
    }

    .btn-primary {
        background-color: #8b0000;
        border: none;
    }

    .btn-primary:hover {
        background-color: #ff4c4c;
    }

    .btn-secondary {
        background-color: #4b5563;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #6b7280;
    }

    label {
        font-weight: 500;
    }

    .alert-danger {
        background-color: #721c24;
        border-color: #f5c6cb;
        color: #f8d7da;
    }
</style>

<div class="container mt-5">
    <h1 class="mb-4">➕ Thêm sản phẩm mới</h1>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="/webbanhang/Product/save" onsubmit="return validateForm();">
        <div class="form-group mb-3">
            <label for="name">Tên sản phẩm:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Mô tả:</label>
            <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="price">Giá:</label>
            <input type="number" id="price" name="price" class="form-control" step="0.01" required>
        </div>

        <div class="form-group mb-4">
            <label for="category_id">Danh mục:</label>
            <select id="category_id" name="category_id" class="form-control" required>
                <?php foreach ($categories as $category): ?>
                    <option value="<?php echo $category->id; ?>">
                        <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">💾 Thêm sản phẩm</button>
        <a href="/webbanhang/Product/index" class="btn btn-secondary ms-2">↩️ Quay lại danh sách</a>
    </form>
</div>

<?php include __DIR__ . '/../shares/footer.php'; ?>
