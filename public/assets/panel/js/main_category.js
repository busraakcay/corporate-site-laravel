// var ajax_url ="{{ route('admin.category.main_category') }}";
// function getSubCategory(cat_id){
//                        var categoryID =cat_id;

//                        if(categoryID)
//                        {
//                           $.ajax({
//                              url :ajax_url+'/' +categoryID,
//                              type : "get",
//                              CrossDomain:true,
//                              dataType : "json",
//                              success:function(data)
//                              {
//                                // console.log(data);
//                                 var subselect = '  <select multiple class="form-control" name="category_parent" onchange="getSubCategory(this.value)"> ';
//                                if(data.length>0){
//                                 subselect+=' <option value="" disabled>Kategori Seçiniz</option>';
//                                   $.each(data, function(key,value){
//                                     subselect+=' <option value="'+value.category_id+'">'+value.category_name+'</option>';
//                                                                   });

//                                   subselect+="</select> <br />";

//                                 $('#subcategory_content').append(subselect);
//                                  }

//                              }
//                           });
//                        }
// }
