# 51 Degrees service for symfony 2

## Instructions
### 1.Add service - config.yml:

	# 51Degrees
    angle_common_fifty_one_degrees:
        51_degrees:
            data_file_path: %data_file_path%

### 2.Path to binary file - parameters.yml:

	data_file_path: /your/file/path

### 3.Download the Premium binary version (skip this if your are using the lite version)

	wget --content-disposition -O /your/file/path/51Degrees-PremiumV3_1.dat  "https://51degrees.com/Products/Downloads/Premium.aspx?Download=True&Type=BinaryV3Uncompressed&LicenseKeys=YOUR_LICENSE"

Remember to change YOUR_LICENSE with your actual 51 Degrees licence.


