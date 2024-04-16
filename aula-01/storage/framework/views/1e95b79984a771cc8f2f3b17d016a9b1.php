<?php $__env->startSection('title', 'Detalhe do Cliente'); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
        Detalhes do Cliente <?php echo e($client->nome); ?>

    </div>
</div>

<div class="card-body">
    <p><strong>ID: </strong> <?php echo e($client->id); ?></p>
    <p><strong>Nome: </strong> <?php echo e($client->nome); ?></p>
    <p><strong>Endereço: </strong> <?php echo e($client->endereco); ?></p>
    <p><strong>Observação: </strong> <?php echo e($client->observacao); ?></p>
    <br>
    <a class="btn btn-success" href="<?php echo e(route('clients.index')); ?>">Voltar para a lista de clientes, se você quiser ver outro cliente, ta bom? meu usuário favorito</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\MWDell-Prof\Documents\laravel\aula-01\resources\views/clients/show.blade.php ENDPATH**/ ?>