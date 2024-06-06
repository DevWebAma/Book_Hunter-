
        <div class="bg-gray-700 rounded-lg shadow-lg p-4">
          <h2 class="font-bold text-lg mb-4">Categories</h2>
          <ul class="list-reset">
            <?php 
            include_once '../app/models/categoriesModel.php';
            $categories = \App\Models\CategoriesModel\findAll($connexion);
            foreach($categories as $category): ?>
            <li>
              <a class="text-gray-300 hover:text-white" href="#"><?php echo $category['name']; ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="bg-gray-700 rounded-lg shadow-lg p-4 mt-4">
          <h2 class="font-bold text-lg mb-4">Tags</h2>
          <div class="tag-cloud">
            <?php
            include_once '../app/models/tagsModel.php';
            $tags = \App\Models\TagsModel\findAll($connexion); 
            foreach($tags as $tag): ?>
            <a class="text-gray-300 hover:text-white text-sm" href="#">
              <?php echo $tag['name']; ?>
            </a>
            <?php endforeach; ?>
          </div>
        </div>
