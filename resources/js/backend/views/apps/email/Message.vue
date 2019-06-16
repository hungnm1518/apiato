<template>
  <div class="animated fadeIn">
    <div class="email-app mb-4">
      <nav>
        <a href="#/apps/email/compose" class="btn btn-danger btn-block">New Email</a>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-inbox"></i> Inbox <b-badge variant="danger">4</b-badge></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-star"></i> Stared</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-rocket"></i> Sent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-trash-o"></i> Trash</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-bookmark"></i> Important<b-badge variant="info">5</b-badge></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-inbox"></i> Inbox <b-badge variant="danger">4</b-badge></a>
          </li>
        </ul>
      </nav>
      <main class="message">
        <div class="toolbar">
          <div class="btn-group mr-1">
            <b-button variant="light"><span class="fa fa-star"></span></b-button>
            <b-button variant="light"><span class="fa fa-star-o"></span></b-button>
            <b-button variant="light"><span class="fa fa-bookmark-o"></span></b-button>
          </div>
          <div class="btn-group mr-1">
            <b-button variant="light"><span class="fa fa-mail-reply"></span></b-button>
            <b-button variant="light"><span class="fa fa-mail-reply-all"></span></b-button>
            <b-button variant="light"><span class="fa fa-mail-forward"></span></b-button>
          </div>
          <b-button variant="light"><span class="fa fa-trash-o"></span></b-button>
          <b-dropdown variant="light" class="ml-1">
            <template slot="button-content">
              <span class="fa fa-tags"></span>
            </template>
            <b-dropdown-item href="#">add label <b-badge variant="danger"> Home</b-badge></b-dropdown-item>
            <b-dropdown-item href="#">add label <b-badge variant="info"> Job</b-badge></b-dropdown-item>
            <b-dropdown-item href="#">add label <b-badge variant="success"> Clients</b-badge></b-dropdown-item>
            <b-dropdown-item href="#">add label <b-badge variant="warning"> News</b-badge></b-dropdown-item>
          </b-dropdown>
        </div>
        <div class="details">
          <div class="title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
          <div class="header">
            <img class="avatar" src="img/avatars/7.jpg">
            <div class="from">
              <span>Lukasz Holeczek</span>
              lukasz@bootstrapmaster.com
            </div>
            <div class="date">Today, <b>3:47 PM</b></div>
          </div>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <blockquote>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </blockquote>
          </div>
          <div class="attachments">
            <div class="attachment">
              <b-badge variant="danger">zip</b-badge> <b>bootstrap.zip</b> <i>(2,5MB)</i>
              <span class="menu">
                <a href="#" class="fa fa-search"></a>
                <a href="#" class="fa fa-share"></a>
                <a href="#" class="fa fa-cloud-download"></a>
              </span>
            </div>
            <div class="attachment">
              <b-badge variant="info">txt</b-badge> <b>readme.txt</b> <i>(7KB)</i>
              <span class="menu">
                <a href="#" class="fa fa-search"></a>
                <a href="#" class="fa fa-share"></a>
                <a href="#" class="fa fa-cloud-download"></a>
              </span>
            </div>
            <div class="attachment">
              <b-badge variant="success">xls</b-badge> <b>spreadsheet.xls</b> <i>(984KB)</i>
              <span class="menu">
                <a href="#" class="fa fa-search"></a>
                <a href="#" class="fa fa-share"></a>
                <a href="#" class="fa fa-cloud-download"></a>
              </span>
            </div>
          </div>
          <form method="post" action="">
            <div class="form-group">
              <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
            </div>
            <div class="form-group">
              <b-button variant="success" tabindex="3" type="submit">Send message</b-button>
            </div>
          </form>
        </div>
      </main>
    </div>
  </div>
</template>
<script>

export default {
  name: 'message'
}
</script>
