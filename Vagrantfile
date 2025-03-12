# Fix permissions after you run commands on both hosts and guest machine
if !Vagrant::Util::Platform.windows?
  system("
      if [ #{ARGV[0]} = 'up' ]; then
          echo 'Setting group write permissions for ./storage/logs/*'
          chmod 775 ./storage/logs
          chmod 664 ./storage/logs/*
      fi
  ")
end

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "generic/ubuntu2004"
  config.vm.network "private_network", ip: "192.168.50.52"

  # Configure cached packages to be shared between instances of the same base box.
  # More info on http://fgrehm.viewdocs.io/vagrant-cachier/usage
  if Vagrant.has_plugin?("vagrant-cachier")
      config.cache.scope = :box
  end
  
  config.vm.provider "virtualbox" do |v|
    v.memory = 1024
    v.cpus = 2
  end

  config.vm.synced_folder ".", "/vagrant", type: "virtualbox"

  config.vm.synced_folder "storage/logs", "/vagrant/logs"
  #, owner: 48, group: 500
  
  config.vm.provision "shell", inline: <<-SHELL
    apt-get update
    apt-get install -y lsb-release ca-certificates apt-transport-https software-properties-common 
    add-apt-repository ppa:ondrej/php
    apt-get update
    apt-get install -y php7.3 php7.3-mbstring php7.3-xml php7.3-curl
  SHELL

  config.vm.provision "shell", name: "run server", run: 'always', inline: <<-SHELL
    nohup php -S 192.168.50.52:8000 -t /vagrant/public &
  SHELL


  config.vm.post_up_message = <<MESSAGE

 You can access me at: http://192.168.50.52:8000

MESSAGE

end