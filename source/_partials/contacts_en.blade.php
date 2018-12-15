<!-- _partials/contacts_ru.blade.php -->
  <div class="inner" id="contact">
    <h2 class="major">Contact us</h2>
      <form name="{{$form_name}}" method="POST" action="#" netlify>
      <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" />
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
      </div>
      <div class="field">
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="4"></textarea>
      </div>
      <ul class="actions">
        <li><input type="submit" value="Send"/></li>
      </ul>
    </form>
    <ul class="contact">
      <li class="fa-home">{{ $page->contact_address_1_en }}</br>{{ $page->contact_address_2_en }}</br>{{ $page->contact_address_3_en }}</li>
      <li class="fa-phone">{{ $page->contact_phone }}</li>
      <li class="fa-envelope">{{ $page->contact_post_en }}</li>
    </ul>

    @include('_partials.copyright_en')

  </div>
