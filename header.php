<div class="header container">
        <header class="blog-header lh-1 py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
              <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
              <a class="blog-header-logo text-dark" href="#">Large</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
              <!--<a class="link-secondary" href="#" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><path d="M21 21l-5.2-5.2"></path></svg>
              </a>-->
             
              <!-- Button trigger modal -->
            <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add article
            </button>

            </div>
          </div>
        </header>
        <?php include "config/config.php" ?>
        <div class="nav-scroller py-1 mb-2">
          <nav class="nav d-flex justify-content-between">
            <a class="p-2 link-secondary" href="/">Главная</a>
            <a class="p-2 link-secondary" href="section.php?section=culture">Культура</a>
            <a class="p-2 link-secondary" href="section.php?section=buisness">Бизнес</a>
            <a class="p-2 link-secondary" href="section.php?section=politic">Политика</a>
            <a class="p-2 link-secondary" href="section.php?section=science">Наука</a>
            <a class="p-2 link-secondary" href="section.php?section=health">Здоровье</a>
            <a class="p-2 link-secondary" href="section.php?section=style">Стиль</a>
            <a class="p-2 link-secondary" href="section.php?section=travel">Путешествия</a>
          </nav>
        </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="TitleInput" class="form-label">Заголовок статьи</label>
          <input type="text"class="form-control" name="title_inp" id="TitleInput">
        </div>
        <div class="mb-3">
          <label for="TextInput" class="form-label">Содержимое статьи</label>
          <textarea class="form-control" maxlength="255" name="text_inp" id="TextInput" rows="8"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>