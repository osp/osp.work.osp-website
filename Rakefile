task :credentials do
  if not File.exists? "credentials.txt"
    abort "credentials.txt not found"
  end
  c = File.open("credentials.txt", "r")
  @credentials = c.read.strip
  if @credentials == ""
    abort "credentials.txt empty"
  end
end

task :lftp do
  if `which lftp`.strip == ""
    abort "Lftp not found. This script uses lftp to transfer files.
Lftp is available through package managers on most unix-like systems"
  end
end


task :indexhibit do
  puts "ftp://ospublish.constantvzw.org//www/ospublish.constantvzw.org/works/ndxz-studio/site/OSP_ludi"
end

task :dokuwiki do
  puts "ftp://ospublish.constantvzw.org//www/ospublish.constantvzw.org/wiki/lib/tpl/osp"
end

task :wordpress => [:lftp, :credentials] do
  sh "lftp -c 'open -e \"mirror -R -v --only-newer --no-perms wordpress/osp\" #{@credentials}/www/ospublish.constantvzw.org/wp-content/themes/'"
end

task :plogger do
  puts "ftp://ospublish.constantvzw.org//www/ospublish.constantvzw.org/image/plog-content/themes/osp"
end
