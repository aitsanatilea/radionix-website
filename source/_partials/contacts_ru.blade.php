<!-- _partials/contacts_ru.blade.php -->
  <div class="inner" id="contact">
    <h2 class="major">Контакты</h2>
      <form name="{{$form_name}}" method="POST" action="#" netlify>
      <div class="field">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name" />
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
      </div>
      <div class="field">
        <label for="message">Сообщение</label>
        <textarea name="message" id="message" rows="4"></textarea>
      </div>
      <ul class="actions">
        <li><input type="submit" value="Отправить сообщение" /></li>
      </ul>
    </form>
    <ul class="contact">
      <li class="fa-home">{{ $page->contact_address_1_ru }}</br>{{ $page->contact_address_2_ru }}</br>{{ $page->contact_address_3_ru }}</li>
      <li class="fa-phone">{{ $page->contact_phone }}</li>
      <li class="fa-envelope">{{ $page->contact_post_ru }}</li>
    </ul>

    @include('_partials.copyright_ru')

  </div>
