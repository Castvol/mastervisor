<div class="card mb-3">
    <div class="card-header">
        <a href="/post/view?id=<?= $model->id ?>"><?= $model->title ?></a>
    </div>
    <div class="card-body">
        <?= $model->content ?>
    </div>
    <div class="card-footer text-muted">
        Автор: <a href="/user/view?id=<?= $model->author->id ?>"><?= $model->author->username ?></a>
        || Дата публикации: <?= $model->updated_at ?>
        <a href="/category/view?id=<?= $model->category->id ?>" class="badge badge-info float-right"><?= $model->category->title ?></a>
    </div>
</div>