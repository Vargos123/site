<?php

    echo '<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="margin-left: auto; margin-right: auto; font-weight:bold">Редактирование</h5>
      </div>
      <div class="modal-body">
        <form action="includes/noteredact.php" method="post">
        <input type="hidden" name="hidden" id="hidden">
            <div class="mb-3">
                 <label for="title" class="form-label" style="color: #a274fc; font-size: 40px; font-weight:bold">Название</label>
                    <input minlength = "4" maxlength = "25" required type="text" class="form-control" id="title" placeholder="Введите название..." name="title" >                            
                </div>
                 <div class="mb-3">
                  <label for="descr" class="form-label" style="color: #a274fc; font-size: 40px; font-weight:bold">Сообщение</label>
                 <textarea minlength = "4" maxlength = "500" style = "resize: none;" required class="form-control" id="descr" rows="3" placeholder="Введите сообщение..." name="descr"></textarea>
                </div>
                <button type="submit" class="btn-saved" name="submit" style="font-size: 25px;">Сохранить</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>';
?>