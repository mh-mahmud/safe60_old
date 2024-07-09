              <?php
                $notice = $this->db->query("SELECT * FROM notice WHERE notice_type='NOTICE' LIMIT 1")->row();
                //$offer = $this->db->query("SELECT * FROM notice WHERE notice_type='OFFER' LIMIT 1")->row();
              ?>
              <div class="bg-dark">
                  <div class="row">
                      <div class="col-4 p-0">
                          <div class="w-100 p-0 text-center notice d-flex align-items-center justify-content-center px-2">
                              <p class="m-0 p-0">Notice</p>
                          </div>
                      </div>
                      <div class="col-8 p-0">
                          <div class="d-flex p-0 align-items-center justify-content-center">
                              <marquee direction="left" class="text-warning"><?php echo $notice->description; ?></marquee>
                          </div>
                      </div>
                  </div>
              </div>