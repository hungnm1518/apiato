<template>
  <div class="animated fadeIn">
    <div class="email-app">
      <nav>
        <a href="#/apps/email/compose" class="btn btn-danger btn-block">New Email</a>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="#/apps/email/inbox"><i class="fa fa-inbox"></i> Inbox <b-badge variant="danger">4</b-badge></a>
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
      <main>
        <p class="text-center">New Message</p>
        <form>
          <div class="form-row mb-3">
            <label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
            <b-col cols="12" sm="11">
              <input type="email" class="form-control" id="to" placeholder="Type email">
            </b-col>
          </div>
          <div class="form-row mb-3">
            <label for="cc" class="col-2 col-sm-1 col-form-label">CC:</label>
            <b-col cols="12" sm="11">
              <input type="email" class="form-control" id="cc" placeholder="Type email">
            </b-col>
          </div>
          <div class="form-row mb-3">
            <label for="bcc" class="col-2 col-sm-1 col-form-label">BCC:</label>
            <b-col cols="12" sm="11">
              <input type="email" class="form-control" id="bcc" placeholder="Type email">
            </b-col>
          </div>
        </form>
        <b-row>
          <b-col sm="11" class="ml-auto">
            <div class="toolbar" role="toolbar">
              <div class="btn-group mr-1">
                <b-button variant="light"><span class="fa fa-bold"></span></b-button>
                <b-button variant="light"><span class="fa fa-italic"></span></b-button>
                <b-button variant="light"><span class="fa fa-underline"></span></b-button>
              </div>
              <div class="btn-group mr-1">
                <b-button variant="light"><span class="fa fa-align-left"></span></b-button>
                <b-button variant="light"><span class="fa fa-align-right"></span></b-button>
                <b-button variant="light"><span class="fa fa-align-center"></span></b-button>
                <b-button variant="light"><span class="fa fa-align-justify"></span></b-button>
              </div>
              <div class="btn-group mr-1">
                <b-button variant="light"><span class="fa fa-indent"></span></b-button>
                <b-button variant="light"><span class="fa fa-outdent"></span></b-button>
              </div>
              <div class="btn-group mr-1">
                <b-button variant="light"><span class="fa fa-list-ul"></span></b-button>
                <b-button variant="light"><span class="fa fa-list-ol"></span></b-button>
              </div>
              <b-button variant="light" class="mr-1"><span class="fa fa-trash-o"></span></b-button>
              <b-button variant="light"><span class="fa fa-paperclip"></span></b-button>
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
            <div class="form-group mt-4">
              <textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
            </div>
            <div class="form-group">
              <b-button class="mr-1" type="submit" variant="success">Send</b-button>
              <b-button class="mr-1" type="submit" variant="light">Draft</b-button>
              <b-button class="mr-1" type="submit" variant="danger">Discard</b-button>
            </div>
          </b-col>
        </b-row>
      </main>
    </div>
  </div>
</template>
<script>

export default {
  name: 'compose'
}
</script>
