<div class="container mx-auto flex flex-wrap pt-4 pb-12 text-white">
      <!-- Aside -->
      <aside class="w-full md:w-1/4 p-3">
      <?php include_once '../app/views/templates/partials/_aside.php';  ?>
      </aside>
      <!-- Main content -->
      <main class="w-full md:w-3/4 p-3">
      <?php echo $content; ?>
      </main>
</div>