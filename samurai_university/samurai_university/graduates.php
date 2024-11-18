<?php get_header(); ?>
    <!-- Home -->

    <div class="home">
      <div class="breadcrumbs_container">
        <div class="image_header">
          <div class="header_info">
            <div>news</div>
            <div>ニュース</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Course -->

    <div class="course">
      <div class="row content-body">
        <!-- Course -->
        <div class="col-lg-8">
          <!-- Course Tabs -->
          <div class="course_tabs_container">
            <div class="tab_panels">
              <!-- Description -->
              <div class="tab_panel">
                <div class="tab_panel_title">ニュース</div>
                <div class="tab_panel_content">
                  <div class="tab_panel_text">
                    <!-- news loop from here-->
                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month">OCT</div>
                              <div class="calendar_day">
                                <span>15</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_title">
                            <a href="news_detail.html">AWSハンズオンセミナー</a>
                          </div>
                          <div class="news_post_meta">
                            <ul>
                              <li>
                                10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は...
                              </li>
                            </ul>
                          </div>
                          <div class="read_continue">
                            <button onclick="location.href='news_detail.html'">詳細を見る</button>
                          </div>
                        </div>
                      </div>
                      <hr />
                    </div>
                    <!-- news loop until here-->

                    <div class="news_posts_small">
                      <div class="row">
                        <div class="col-lg-2 col-md-2 col-sx-12">
                          <div class="calendar_news_border">
                            <div class="calendar_news_border_1">
                              <div class="calendar_month">OCT</div>
                              <div class="calendar_day">
                                <span>15</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sx-12">
                          <div class="news_post_small_title">
                            <a href="news_detail.html">AWSハンズオンセミナー</a>
                          </div>
                          <div class="news_post_meta">
                            <ul>
                              <li>
                                10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は...
                              </li>
                            </ul>
                          </div>
                          <div class="read_continue">
                            <button onclick="location.href='news_detail.html'">詳細を見る</button>
                          </div>
                        </div>
                      </div>
                      <hr />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Course Sidebar -->
        <div class="col-lg-4" style="background-color: #2b7b8e33">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>