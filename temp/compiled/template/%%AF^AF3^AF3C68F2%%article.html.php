<?php /* Smarty version 2.6.25, created on 2013-05-02 00:17:09
         compiled from admin/article.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/header.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
  <?php if ($this->_tpl_vars['msg']): ?>
  <div class="msg msg_<?php echo $this->_tpl_vars['msg']['type']; ?>
">
    <?php echo $this->_tpl_vars['msg']['msg']; ?>

  </div>
  <?php endif; ?>

  <form id="addCategory" method='post'>
    <fieldset>
      <legend><?php echo $this->_tpl_vars['web_action']; ?>
</legend>
      <label for="addArticleTitle">文章标题: </label>
      <input id="addArticleTitle" class="title" type="text" name="title" checkVal="notnull" value="<?php if ($this->_tpl_vars['article']): ?><?php echo $this->_tpl_vars['article']['a_title']; ?>
<?php endif; ?>" /><br />
      <label for="addArticleSource">文章来源: </label>
      <input id="addArticleSource" type="text" name="source" value="<?php if ($this->_tpl_vars['article']): ?><?php echo $this->_tpl_vars['article']['a_source']; ?>
<?php endif; ?>" /><br />
      <label for="addArticleCategory">所属类别: </label>
      <select id="addArticleCategory" name="category" checkVal="notNull">
        <option value="0">无</option>
        <?php $_from = $this->_tpl_vars['allCategory']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
        <option value="<?php echo $this->_tpl_vars['v']['cg_id']; ?>
" <?php if ($this->_tpl_vars['article']['a_category'] == $this->_tpl_vars['v']['cg_id']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']['cg_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
      </select><br />
      <label for="addArticleStatus">是否发布: </label>
      <select id="addArticleStatus" name="status" class="switch">
        <option value="locked" <?php if ($this->_tpl_vars['article']['a_status'] == 'locked'): ?>selected="selected"<?php endif; ?>>否</option>
        <option value="published" <?php if ($this->_tpl_vars['categoryInfo']['cg_public'] == 'published' || $this->_tpl_vars['categoryInfo']['cg_public'] != 'locked'): ?>selected="selected"<?php endif; ?>>是</option>
      </select>
      <br />
      <label for="addArticleDate">发布时间: </label>
      <input id="addArticleDate" type="text" name="date" value="<?php if ($this->_tpl_vars['article']): ?><?php echo $this->_tpl_vars['article']['a_date']; ?>
<?php endif; ?>" /><br />
    </fieldset>
    <fieldset>
      <legend>文章内容</legend>
      <textarea id="addArticleContent" name="content" class="article" checkVal="notnull">
        <?php if ($this->_tpl_vars['article']): ?><?php echo $this->_tpl_vars['article']['a_content']; ?>
<?php endif; ?>

      </textarea>
    </fieldset>
    <fieldset>
      <legend>图片</legend>
      <input class="ke-input-text" type="text" id="uploadImageUrl" value="" readonly="readonly" /> 
      <input type="button" id="uploadImageButton" value="上传" /><span class="uploadImageLoading">上传中。。。</span>      
      <div class="imageMag"></div>
    </fieldset>
    <fieldset>
      <legend>附件</legend>
      <input class="ke-input-text" type="text" id="uploadFileUrl" value="" readonly="readonly" /> 
      <input type="button" id="uploadFileButton" value="上传" /><span class="uploadFileLoading">上传中。。。</span>      
      <div class="fileMag"></div>
    </fieldset>

    <fieldset class="submit">
      <input type="button" id="pageReset" value="取消" />
      <input type="button" id="pageSubmit" value="提交" />
    </fieldset>
  </form>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin/footer.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script charset="utf-8" src="/plugins/kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="/plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
$(function(){
  $(\'#addArticleDate\').datepicker({
    autoSize: true,
    dateFormat: "yy-mm-dd"
  });
  if($(\'#addArticleDate\').val()==""){
    var myDate = new Date();
    $("#addArticleDate").val(myDate.getFullYear()+\'-\'+((myDate.getMonth()+1)>9?(myDate.getMonth()+1):\'0\'+(myDate.getMonth()+1))+\'-\'+(myDate.getDate()>9?myDate.getDate():\'0\'+myDate.getDate()));
  }
  var editor;
  KindEditor.ready(function(K) {
    editor = K.create(\'#addArticleContent\', {
      uploadJson : \'/ajax/upload.php\',
      fileManagerJson : \'/ajax/file_manager.php\',
      width:\'100%\',
      height:\'500px\',
      afterBlur:function(){this.sync()},
      zIndex:99,
      resizeType:0,
      afterUpload:function(self,data){
        var url = K.formatUrl(data.url, \'absolute\');
        if(data.type == \'image\'){
        $(\'.imageMag\').append(\'<div class="imagename"><img src="\'+url+\'" width="80" /><input type="hidden" name="image[]" value="\'+url+\'" /><input type="checkbox" title="在页面下方单独显示" name="slideshow[]" />幻灯片显示 <input type="checkbox" title="作为文章封面" name="showascover[]" />作为封面</div>\');
        }else if(data.type == \'file\'){
        $(\'.fileMag\').append(\'<div class="filename">\'+data.name+\'<input type="hidden" name="file[]" value="\'+url+\'" /> <input type="checkbox" name="separately[]" title="在页面下方单独显示" />单独显示</div>\');
        }

      },
      afterCreate : function() {
        var self = this;
        K.ctrl(document, 13, function() {
          self.sync();
          checkForm($(\'#addCategory\'));
        });
        K.ctrl(self.edit.doc, 13, function() {
          self.sync();
          checkForm($(\'#addCategory\'));
        });
      }
    });
  var uploadImageButton = K.uploadbutton({
    button : K(\'#uploadImageButton\'),
    fieldName : \'imgFile\',
    url : \'../ajax/upload.php?dir=image\',
    afterUpload : function(data) {
      $(\'.uploadImageLoading\').hide();
      if (data.error === 0) {
        var url = K.formatUrl(data.url, \'absolute\');
        $(\'.imageMag\').append(\'<div class="imagename"><img src="\'+url+\'" width="80" /><input type="hidden" name="image[]" value="\'+url+\'" /><input type="checkbox" title="在页面下方单独显示" name="slideshow[]" checked="checked" />幻灯片显示 <input type="checkbox" title="作为文章封面" name="showascover[]" />作为封面</div>\');

      } else {
        alert(data.message);
      }
    },
    afterError : function(str) {
      alert(str);
    }
  });
  uploadImageButton.fileBox.change(function(e) {
    $(\'.uploadImageLoading\').css(\'display\',\'inline-block\');
    uploadImageButton.submit();
  });
  var uploadFileButton = K.uploadbutton({
    button : K(\'#uploadFileButton\'),
    fieldName : \'imgFile\',
    url : \'../ajax/upload.php?dir=file\',
    afterUpload : function(data) {
      $(\'.uploadFileLoading\').hide();
      if (data.error === 0) {
        var url = K.formatUrl(data.url, \'absolute\');
        $(\'.fileMag\').append(\'<div class="filename">\'+data.name+\'<input type="hidden" name="file[]" value="\'+url+\'" /> <input type="checkbox" name="separately[]" checked="checked" title="在页面下方单独显示" />单独显示</div>\');
      } else {
        alert(data.message);
      }
    },
    afterError : function(str) {
      alert(str);
    }
  });
  uploadFileButton.fileBox.change(function(e) {
    $(\'.uploadFileLoading\').css(\'display\',\'inline-block\');
    uploadFileButton.submit();
  });
});
  $(\'#pageSubmit\').click(function(){
    checkForm($(\'#addCategory\'));
  });
})
</script>
'; ?>