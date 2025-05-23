<?php include __DIR__ . '/../shares/header.php'; ?>

<h1>Danh sách danh mục</h1>

<a href="/webbanhang/Category/add" class="btn btn-success mb-2">Thêm danh mục mới</a>

<?php if (!empty($categories)): ?>
<ul class="list-group">
    <?php foreach ($categories as $category): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="/webbanhang/Category/show/<?php echo $category->id; ?>">
                <?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>
            </a>
            <span>
                <a href="/webbanhang/Category/edit/<?php echo $category->id; ?>" class="btn btn-warning btn-sm">Sửa</a>
                <a href="/webbanhang/Category/delete/<?php echo $category->id; ?>" 
                   class="btn btn-danger btn-sm" 
                   onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">Xóa</a>
            </span>
        </li>
    <?php endforeach; ?>
</ul>
<?php else: ?>
    <p>Chưa có danh mục nào.</p>
<?php endif; ?>

<?php include __DIR__ . '/../shares/footer.php'; ?>
