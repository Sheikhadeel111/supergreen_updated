<div class="form-group row" id="show_cat_ingredients">
      <label class="col-md-3 label-control" for="cat_pro_category">Ingredients Category</label>
      <div class="col-md-9">
        <select name="cat_pro_category" id="cat_pro_category" required class="form-control select2">
          <option value="">Ingredients Category</option>
          <?php foreach ($ingdata as $key => $value) { ?>
            <option value="<?= $value->cat_id ?>"><?= $value->name ?></option>
          <?php }?> ?>                         
        </select>
      </div>
</div>