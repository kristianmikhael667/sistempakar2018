      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sipakar Diagnosa Tumor Otak 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>


  
        <script>
            var chat_appid = '50360';
            </script>
            <?php if($this->session->userdata('id_user') && $this->session->userdata('id_user') > 0) { ?>
            <script>
            <?php
                $id_user = $this->session->userdata('id_user');
                $cek_query = $this->model_login->cek_data($id_user); 
                foreach ($cek_query->result_array() as $row)
                  {             
                    ?>
                    var chat_id = '<?php echo $row['nama'] ;?>';
              <?php } ?> 
              var chat_name = "<?php echo $this->session->userdata('nama'); ?>"; 
              var chat_link = "<?php echo $this->session->userdata('link'); ?>";
              <?php
                $id_user = $this->session->userdata('id_user');
                $cek_query = $this->model_login->cek_data($id_user); 
                foreach ($cek_query->result_array() as $row)
                  {            
                  ?>
                    var chat_avatar = '<?php echo base_url().'assets/images/'.$row['foto'];?>';
              <?php } ?> 
              var chat_role = "<?php echo $this->session->userdata('role_id'); ?>";
              <?php
                  foreach ($record->result() as $row)
                  {             
                    ?>
                    var chat_friends = '<?php echo $row->nama ;?>';
                    <?php } ?> 
              </script>
            <?php } ?>
            <script>
            (function() {
                var chat_css = document.createElement('link'); chat_css.rel = 'stylesheet'; chat_css.type = 'text/css'; chat_css.href = 'https://fast.cometondemand.net/'+chat_appid+'x_xchat.css';
                document.getElementsByTagName("head")[0].appendChild(chat_css);
                var chat_js = document.createElement('script'); chat_js.type = 'text/javascript'; chat_js.src = 'https://fast.cometondemand.net/'+chat_appid+'x_xchat.js'; var chat_script = document.getElementsByTagName('script')[0]; chat_script.parentNode.insertBefore(chat_js, chat_script);
            })();
          </script>  
        
  
  <div class="chatbot">
  <script type="text/javascript" language="javascript">
    window.watsonAssistantChatOptions = {
        integrationID: "efde144f-8d73-4c02-a6db-4f0959d8736d", // The ID of this integration.
        region: "au-syd", // The region your integration is hosted in.
        serviceInstanceID: "d116a779-a011-4f2b-a8b7-834555191664", // The ID of your service instance.
        onLoad: function(instance) { instance.render(); }
      };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
      document.head.appendChild(t);
    });
  </script>
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#content">
    <i class="fas fa-angle-up"></i>
  </a>

