<?php
/***************************************************************
 *  Copyright notice
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * CheckSumProvider
 *
 * @license     http://www.gnu.org/copyleft/gpl.html
 */
class CheckSumProvider {

	/**
	 * Returns a cache array of the check sums which will speed up the process
	 *
	 * @return array
	 */
	static public function getCache() {
		// Just to speed up the process...
		// Note: use extract_checksums.php to prepare
		$checksums = array(
			'7.3.0' => array(
				'tar' => array(
					'md5' => '3a36ee4ac34a2433ab2e2089c923d8f1',
					'sha1' => '16c91366a5ce6209986ef0007bdb6cb9bdadf43a',
				),
				'zip' => array(
					'md5' => '56904794c4d880512963d48d78e25674',
					'sha1' => 'c52b4e0f7da558c0f26665cdd54a51795b429414',
				),
			),
			'7.2.0' => array(
				'tar' => array(
					'md5' => '144e4d29acf2e6a3ed7f548b5d470310',
					'sha1' => '506d22dcf384f23c172ebe7f562057e0bbf89d32',
				),
				'zip' => array(
					'md5' => 'caebda48df74d0dac007c6ce338a0a4e',
					'sha1' => '55fff8c6c465b1fdf090fd52b0d311cce79d71f0',
				),
			),
			'7.1.0' => array(
				'tar' => array(
					'md5' => 'c17d256e7d2e1b6bfaf7c70ba5b26d90',
					'sha1' => '82f3ce50a83c0ae266649d8051f0456f97cfa3f7',
				),
				'zip' => array(
					'md5' => '60a1725869c7633cdb697cea6672ad5d',
					'sha1' => '3aba4c8def027d7f75b1ccba62005847732fcd41',
				),
			),
			'7.0.2' => array(
				'tar' => array(
					'md5' => 'a42d3292df8761b59ff64e8719a18520',
					'sha1' => '8f09b63a549d667f5077a937bf4701669ccde07d',
				),
				'zip' => array(
					'md5' => '89a17926865ddbc2d087fcf0c2ec9757',
					'sha1' => '49718c2631c93c4eb633b205918375bd233dcf3a',
				),
			),
			'7.0.0' => array(
				'tar' => array(
					'md5' => '9a8bde071766dc899471c5aeb0352a91',
					'sha1' => 'cc2957be8b41ba5009d85dda1cb9d01bffd03e75',
				),
				'zip' => array(
					'md5' => 'a35a51b6104247c78dabdced052027fd',
					'sha1' => '4f45a9176c6086751a5f095433d2e7a932be1de4',
				),
			),
			'6.2.13' => array(
				'tar' => array(
					'md5' => '9c04385b58e65b9087540ca6ae59f7cc',
					'sha1' => '0bec0888e298c9a34618d0fb7b726aef7a41ef7f',
				),
				'zip' => array(
					'md5' => '5db5d737ddd7ab546f872ec147b75fa8',
					'sha1' => '31fa87b676ab995e7724fb52253dba8126de207c',
				),
			),
			'6.2.12' => array(
				'tar' => array(
					'md5' => 'ae2bff15c479e8260aa7eef637872973',
					'sha1' => '41775b361eb89c45195820cba8c8e3085dfa9f5d',
				),
				'zip' => array(
					'md5' => '140e6980f01d0fce330d9204415a32af',
					'sha1' => 'c9c859ecba3d5dd2b5537d4b905279d0efa12667',
				),
			),
			'6.2.11' => array(
				'tar' => array(
					'md5' => '07bd9ad3c7fe8af4468160e62dabe6c2',
					'sha1' => '935aa012e2904742ddf1fd9bb2118865edf4097b',
				),
				'zip' => array(
					'md5' => '9fc257cdc3329171b0a5e8bfbcb64eff',
					'sha1' => '509206f922883f1eb09cd437de662f0851867009',
				),
			),
			'6.2.10' => array(
				'tar' => array(
					'md5' => '97437e953b15b8445166c4dda615bda0',
					'sha1' => '0b2fcc884555de035a27199177656a5f51855625',
				),
				'zip' => array(
					'md5' => '2df3f8a26daff609e3797a747baa5a52',
					'sha1' => 'f3f1e5269a5d82741235b5001a071e1eb06fafc4',
				),
			),
			'6.2.10rc1' => array(
				'tar' => array(
					'md5' => 'a55d0a3304c6bc17cad2f0410760ca0a',
					'sha1' => 'b30dc1c375ccc8b058773f2c4aa14077a87939ba',
				),
				'zip' => array(
					'md5' => '50479d483c3529040df0e736417d6608',
					'sha1' => 'bdb6fbdbe6e01dd3f5c8ac28adf5cfa4b589223b',
				),
			),
			'6.2.9' => array(
				'tar' => array(
					'md5' => 'ed30741a3fd6cbfe08725c386a3d3cc7',
					'sha1' => '2ff12af0c7a21c1542b9cbac5da813ff1b403dae',
				),
				'zip' => array(
					'md5' => 'ad0c8a345c13015ccbfd3111bd27a1e8',
					'sha1' => '5af37f36dc5948f2d47c0ef50353ae035968ad93',
				),
			),
			'6.2.8' => array(
				'tar' => array(
					'md5' => '50cbef4c4ea8bea83c73a62187676a19',
					'sha1' => 'bd52a984d8a58344547a158b6a0a0fa60dcf245e',
				),
				'zip' => array(
					'md5' => '980a7253157cf53d55d824ae7ebd9617',
					'sha1' => '83da9442c196ba0a3b01b8e0f65cbe4d0ca7f19b',
				),
			),
			'6.2.7' => array(
				'tar' => array(
					'md5' => 'f4d8f9211012e5922f7f25b9cb2c169a',
					'sha1' => '4fe17b6c57c7319aef4db802eded26a2d9949ad0',
				),
				'zip' => array(
					'md5' => '86f1bd0642093dc91c4b5cb9364b5ad5',
					'sha1' => '32295673328a2caeab88f6f4f66ec17e08c717f3',
				),
			),
			'6.2.6' => array(
				'tar' => array(
					'md5' => '3da960d90a4a34e09aad2b1be64c0fe7',
					'sha1' => '72ce60bf85951cbf99dcbaee37e7c2e1477bd050',
				),
				'zip' => array(
					'md5' => 'b1285c999f5778653e8a5bc75f0ed656',
					'sha1' => '95c83942b803c0a08a3e8501d3449197335ea257',
				),
			),
			'6.2.5' => array(
				'tar' => array(
					'md5' => 'b011fe9a965ca97473dd30d1f6a0fb2c',
					'sha1' => '21e475a393275b905159d7e6466f9e8532a8cfcd',
				),
				'zip' => array(
					'md5' => '4011750ad515f521cf486bc00b6cf5e9',
					'sha1' => '475dd82eda7d9a557fa9da4876dd30e01196fd5f',
				),
			),
			'6.2.4' => array(
				'tar' => array(
					'md5' => '0f970b4fc7dfdcf62181713f9ea8d8e5',
					'sha1' => '8eac119c545c6e42a8ab377df3a60cea5f23d762',
				),
				'zip' => array(
					'md5' => '96e18faf537d9ded3d47ff4859342dcf',
					'sha1' => '14589d4dee5839fa82543efe0e53fde0fce320b4',
				),
			),
			'6.2.3' => array(
				'tar' => array(
					'md5' => 'e7cbe7686424ab74bbd8235baf5259f1',
					'sha1' => '5b0dcd6f9fada78f15dee5e3cf5e3eea0617b7da',
				),
				'zip' => array(
					'md5' => '24960795480790aa30c47cf2b4c556ba',
					'sha1' => '8613d07c60036f211a1a80071453a088fe304070',
				),
			),
			'6.2.2' => array(
				'tar' => array(
					'md5' => 'f399c1a543fe8780ddb5b1d493d45390',
					'sha1' => 'ebfcfd7552715fead056b852839d7019867d5d23',
				),
				'zip' => array(
					'md5' => 'cf640aad02cf559d5bf60af8c9b4c0cd',
					'sha1' => '6a65065830ea5fc2d9b8a0872b861eb9458196ce',
				),
			),
			'6.2.1' => array(
				'tar' => array(
					'md5' => 'c0b26d2ff257536c5b8367f853951113',
					'sha1' => '791445d3319607ab475e2344ce85689ccbaa7e65',
				),
				'zip' => array(
					'md5' => 'e9e536e8d8ce6bf1f8a5c6ae744cbc7f',
					'sha1' => '36200410cd244bc71fc7402803e318c46e953992',
				),
			),
			'6.2.0' => array(
				'tar' => array(
					'md5' => '17b56d6cc10876020dfdfaa3f6fec123',
					'sha1' => '4911c9bab620cb66d7660eac05ddd0a5048b8b24',
				),
				'zip' => array(
					'md5' => 'efc1ef2c43050e11f39bcc132f7dba61',
					'sha1' => '1448257039b9ba2d65a0752f368c04351716b1e0',
				),
			),
			'6.2.0rc2' => array(
				'tar' => array(
					'md5' => 'd3283c8a5d52a6b40c7698a67b54ac75',
					'sha1' => '44b0bcd65f6ae3f0383f2630cc00deaafbca9c9d',
				),
				'zip' => array(
					'md5' => 'cca7a7ae0e2ca41167947dece74cc545',
					'sha1' => 'cd877bc6bdba1e30efc3e44f53d8d81a5c7d257b',
				),
			),
			'6.2.0rc1' => array(
				'tar' => array(
					'md5' => 'd3b284e78231b09e9e31f939e281c6aa',
					'sha1' => '2ef947336a7807e56c86d63111be99d58705c9a8',
				),
				'zip' => array(
					'md5' => 'edf9be995e41a8ede64d1c4ba59d52dc',
					'sha1' => '7db05dfee0f8c08edb46829849f019cec451987b',
				),
			),
			'6.2.0beta7' => array(
				'tar' => array(
					'md5' => '6a0256a39532bbf24b36b4484c2b0277',
					'sha1' => '05c654987a0889e2644602f5c5fa1a85265259f7',
				),
				'zip' => array(
					'md5' => '9377c7f78bdbdeba1e863d61df849ac8',
					'sha1' => 'f813d16f3eddd71dd89b88b6aa6a39a6ddcc1dae',
				),
			),
			'6.2.0beta6' => array(
				'tar' => array(
					'md5' => '3617dab77b15491a596cf4cfbbf70234',
					'sha1' => 'cf2584dd2019486914ec8e6eb9106737186eff94',
				),
				'zip' => array(
					'md5' => '15d4f93645877a7c23695c3f41174d6f',
					'sha1' => 'b11453504d73c9cdd75c9517423258f24c62afcd',
				),
			),
			'6.2.0beta5' => array(
				'tar' => array(
					'md5' => 'b0d57d7b63d1c88d99d3b21c9138893f',
					'sha1' => '95fc8d8fbcd23b15275401bc951c0ad89f6e79ad',
				),
				'zip' => array(
					'md5' => 'ac36d0b486e1678ba920ffb75995fa07',
					'sha1' => '52306d6780f73071fe6f75dde6c5d95589298c29',
				),
			),
			'6.2.0beta4' => array(
				'tar' => array(
					'md5' => '456090b1a012d612223c04bbf1d66cb6',
					'sha1' => '7f3f6d2d9648bf77d3d0df58904cc7615e3f007e',
				),
				'zip' => array(
					'md5' => '9b70d8e81982e6490a5134c549795ab3',
					'sha1' => '0eb0ec70359fdcf7d077adbae7657c696b1202bc',
				),
			),
			'6.2.0beta3' => array(
				'tar' => array(
					'md5' => 'c8b7ff8cf9e51fe46e0867ebc750ae15',
					'sha1' => 'ff9ff20b39f8304d76109ff88173156f6ca72232',
				),
				'zip' => array(
					'md5' => '092df23deca99b58657cce7ddb0ad062',
					'sha1' => 'c95c5f7e91436bd5f701a5f9be2d46252d7ac536',
				),
			),
			'6.2.0beta2' => array(
				'tar' => array(
					'md5' => 'd0806b18c28f3e72415160853bcb0e23',
					'sha1' => '665627d613e5159328681911bb584b535e5b0afc',
				),
				'zip' => array(
					'md5' => '50cd865600cd058a23dcff77ed6cac06',
					'sha1' => 'cd1298605180236832fdf21a55dfe3ef7d0bc269',
				),
			),
			'6.2.0beta1' => array(
				'tar' => array(
					'md5' => 'b8f4a35d01706ec0b0fc0d3c4d80d8c1',
					'sha1' => 'beb6f1c44f9a67ab88e57e818633ee64ab24456e',
				),
				'zip' => array(
					'md5' => '1b7cddabe643f4f0f7492b0f68a87c52',
					'sha1' => 'a4e7ed749dd8447ab34d440e8cfd0ad6030c7165',
				),
			),
			'6.2.0alpha3' => array(
				'tar' => array(
					'md5' => 'e91acf53bb03cb943bd27e76643901c5',
					'sha1' => '3dc156eed4b99577232f537d798a8691493f8a83',
				),
				'zip' => array(
					'md5' => 'f8d166e9979a43490ec0ae03e0ff46a1',
					'sha1' => '87448a8745b6eae36bd1e7cb6705a42771edfa03',
				),
			),
			'6.2.0alpha2' => array(
				'tar' => array(
					'md5' => 'd528f7abe0290bfb4302b7ef7b64a2fe',
					'sha1' => 'bf50ae8180604a8232fba3f70380da650b3266a1',
				),
				'zip' => array(
					'md5' => 'd71b97d09cb1719b76ba3bd86efaba19',
					'sha1' => '73a6d9478fef4a9949931152bcecc82caa0cc0c8',
				),
			),
			'6.2.0alpha1' => array(
				'tar' => array(
					'md5' => '74459680910c4982b3368a9b8e6b6aa7',
					'sha1' => '6989d344fbaa6cdc4f0cf87684403f795fe5a97f',
				),
				'zip' => array(
					'md5' => '6cd76c5885f0e001599ae6c621cc0614',
					'sha1' => '60576909d38084bcba4360bdc0f734540725f615',
				),
			),
			'6.1.12' => array(
				'tar' => array(
					'md5' => '0270cc687f15f56dea83341655d8a76a',
					'sha1' => 'a5da73fec7f3563002f3693c2128568308b03d88',
				),
				'zip' => array(
					'md5' => 'd559ed82d479a742f351542d7bc57da3',
					'sha1' => 'fc9519d65ee3c3d556a3c8fa0a19696a6ae0e507',
				),
			),
			'6.1.11' => array(
				'tar' => array(
					'md5' => '151111201b3c0c7afb687a21c2651b06',
					'sha1' => '7ab74bd328b281aebadb5794ba78fa922c1c985a',
				),
				'zip' => array(
					'md5' => '62ca1d147337da3c2eb4ed894720c5dd',
					'sha1' => '49d75b013c0d655c0f0a7f56c2589b575e84ea02',
				),
			),
			'6.1.10' => array(
				'tar' => array(
					'md5' => '312144646c1162b46effa35dc13e00ca',
					'sha1' => 'ef2eb96add9bb451a2d8db455201d8462129a997',
				),
				'zip' => array(
					'md5' => '8d4c16d9b21fcf79794e5ba0a6357374',
					'sha1' => '21e0517aabbde7cfde14902ba274e9b25a1a5909',
				),
			),
			'6.1.9' => array(
				'tar' => array(
					'md5' => '9e9fc9a50934fca08e5b55551b1eddbe',
					'sha1' => 'd58d5b6ddc4bfee00af5f78a3a6df686faacf249',
				),
				'zip' => array(
					'md5' => '6ae05c35114ee8f13f8fc7342437c601',
					'sha1' => 'e69e4817fcc33f58b739959dd53af5b1d7a5014a',
				),
			),
			'6.1.8' => array(
				'tar' => array(
					'md5' => '831bd2fd445bd50ac4a22d69114578a0',
					'sha1' => 'fe5c7d3fd02495764e62ef1aad299a954e52c752',
				),
				'zip' => array(
					'md5' => '7778d232c458cdbdbe316d020009bab4',
					'sha1' => '0b8aa1a84e1038f470a4c5f108f87f7ae3f17126',
				),
			),
			'6.1.7' => array(
				'tar' => array(
					'md5' => '66130b21ce61ef2ff5eafdd28b4ba6e1',
					'sha1' => '77167de436c4f8d0f04a8b4f5dfd0fa00793c8b7',
				),
				'zip' => array(
					'md5' => 'e7e65287615e6d7254e5442f653b6f49',
					'sha1' => '6f1fe0c8f6dee2761874bab4812bec2d55481483',
				),
			),
			'6.1.6' => array(
				'tar' => array(
					'md5' => 'a8dba1a604709777d86674d719e1345f',
					'sha1' => '24fc174b03d339eb2647e741625f94dd1fe5cb26',
				),
				'zip' => array(
					'md5' => '785c48ae26f2752306dd4711c5b5081e',
					'sha1' => '39d96f629e4ac784c8c4ef612103840e28cf93d4',
				),
			),
			'6.1.5' => array(
				'tar' => array(
					'md5' => 'fa124e639e91ecade837f209488de5d2',
					'sha1' => 'd63b4e80c2c7ea0ba6ea73cdb7154cd4a951bf67',
				),
				'zip' => array(
					'md5' => '98c6b08e1ab3e94a4e9aafe06323ab03',
					'sha1' => 'c4b6fe8c972fe565fb374c13d9663f0670562bcb',
				),
			),
			'6.1-snapshot-20130911' => array(
				'tar' => array(
					'md5' => 'ccb08de1d4fed2bf9834a7e633163f19',
					'sha1' => 'f4f39c5ae903852aa3963bef49e8f69d069ec832',
				),
				'zip' => array(
					'md5' => '63731aad0e86c20269bd874773807926',
					'sha1' => 'e99902eea4f25a00bc61c76d9101c650ed7bc6ec',
				),
			),
			'6.1.4' => array(
				'tar' => array(
					'md5' => '9a6394fa3640abe5f0bffd49cb3974cf',
					'sha1' => '1927a5f1372d279abaaa4d09b96511bba0fb2787',
				),
				'zip' => array(
					'md5' => '4bcca10d941070543db5399c3a58b7a7',
					'sha1' => '0233ba021b93509ce29ac38cfe448e3c7c34ba35',
				),
			),
			'6.1.3' => array(
				'tar' => array(
					'md5' => '3e1a0b020373e4b4ca8c648eb9e9ff38',
					'sha1' => '362acbf799684a564c36956892d80b79c7785210',
				),
				'zip' => array(
					'md5' => 'c5e4ccf729b805e5360e0e1e50ab1944',
					'sha1' => '971a3ed1ae3d1bb35ef070e03bb5dd964af79305',
				),
			),
			'6.1.2' => array(
				'tar' => array(
					'md5' => 'cfda806c62eae120d7fcf3a781d2515a',
					'sha1' => 'e9e6c44239f93a4d789014d708787e79aa18bb56',
				),
				'zip' => array(
					'md5' => '27b49ebd3fe77f04d7e7f90aee97a612',
					'sha1' => '3b42a783feeab95740b685da4e8be398e4eebef1',
				),
			),
			'6.1-snapshot-20130604' => array(
				'tar' => array(
					'md5' => '5677f0357362a07c08801b8684308b2f',
					'sha1' => 'd5015160a5a110f7ef79a2d59171602394579818',
				),
				'zip' => array(
					'md5' => '9b793b0fbba300b8afc1e4f6434b39bb',
					'sha1' => 'd51f042d5ed004116aa7ee47f949e8986df05447',
				),
			),
			'6.1.1' => array(
				'tar' => array(
					'md5' => 'a1561f7e2994244701e6c89810167341',
					'sha1' => '5a00b4bde1170e82739c4920b84e2bc51cc782db',
				),
				'zip' => array(
					'md5' => '7713041a2c989fac798fe522501453fd',
					'sha1' => '365bd169a873084aaecc2e9c2a821717e3249e14',
				),
			),
			'6.1.0' => array(
				'tar' => array(
					'md5' => '059e9938ad6eb0bfb7303115d3144c9d',
					'sha1' => '64fd79a22f36c1c06b74732879c44a049625e2c0',
				),
				'zip' => array(
					'md5' => 'b4bc3f03c9dfe1ccc96ecb34f09c68ab',
					'sha1' => '12ad32c81877fb91b9ac103ca9c584ba20b5c6bd',
				),
			),
			'6.1.0rc1' => array(
				'tar' => array(
					'md5' => '5cfcaf669ac3bad65074ea16cac6bd93',
					'sha1' => '6053a37db087300c6d1ddcd117f27f3c8be8f2c7',
				),
				'zip' => array(
					'md5' => 'a8579e8777a2516c0cc8d4203b5ee00f',
					'sha1' => '446f3a6e3a63e25261872f1a1bd46937621f58ed',
				),
			),
			'6.1.0beta2' => array(
				'tar' => array(
					'md5' => '75d57b67ee75103e7d9208f11b146f8b',
					'sha1' => 'b307c49010cd1f41ca480ec3c4b7248bed4400b2',
				),
				'zip' => array(
					'md5' => '41c2b8a6fd59a9c72e8925098631291c',
					'sha1' => 'cbaecf0488657359805c3a7d0a512e24cfe82770',
				),
			),
			'6.1.0beta1' => array(
				'tar' => array(
					'md5' => 'd17d7b93f7e0b4d5702d129b134997f7',
					'sha1' => 'acc17dec47718cb3e09efae7b2bc0f49a127781f',
				),
				'zip' => array(
					'md5' => '81e7176269e319cc027e5f6a8c87e30e',
					'sha1' => '6fb058b3bc2840fa6a25d1e0fee46d8deb0a0263',
				),
			),
			'6.1.0alpha1' => array(
				'tar' => array(
					'md5' => '7c797108a3ce6a7b3d6ce3398f9fcf18',
					'sha1' => '5c1bc2a1d81582c60ec2d39e6519756ae92a3271',
				),
				'zip' => array(
					'md5' => '5d3a915d169df0602e55fe7bab3701f9',
					'sha1' => '5c27be62a9418e6ac35df542184632411a7cdae4',
				),
			),
			'6.0.14' => array(
				'tar' => array(
					'md5' => '14f2a891e7d70efe8f2aafb85b4b73c8',
					'sha1' => 'd346db6e3bb7910ad6a090f57b312c51454c4cbd',
				),
				'zip' => array(
					'md5' => 'e4677c82b510e85f79ecb48629a049d8',
					'sha1' => 'e0deb6ca45cdeff0a9bb65914422eb27055a7c43',
				),
			),
			'6.0.13' => array(
				'tar' => array(
					'md5' => '4d21cced41dcc9719e59262e6cf32686',
					'sha1' => 'fd406f33fc76fdf243eecd4b059dd93dc0068ee4',
				),
				'zip' => array(
					'md5' => '6394671abd7a2b3a4098f618666633a6',
					'sha1' => '99e5a61e90b4dfe59b204e8fefb4c5f46a9220e8',
				),
			),
			'6.0.12' => array(
				'tar' => array(
					'md5' => '8238e4af63bfbca34d43193065604d34',
					'sha1' => '1f14b6ed7d971d5f94d8147d27d1055916e228f2',
				),
				'zip' => array(
					'md5' => '25ba5afe61b5d426a1895fb298536b7a',
					'sha1' => '958952c2b5eeb2914aec34e519d7883e66e383e4',
				),
			),
			'6.0.11' => array(
				'tar' => array(
					'md5' => '9add841b13d1c5f12bdb76dd9a8e0554',
					'sha1' => 'a031f3b3911877fa21c2ad64099f9a8c3f8c2e15',
				),
				'zip' => array(
					'md5' => '76ab06121b2530383fe12a2c29bdad95',
					'sha1' => '438c5b9fcfb3ad463c04d13790cb9a7100a9dab2',
				),
			),
			'6.0.10' => array(
				'tar' => array(
					'md5' => 'a026fff3b4713f331767ae780a94e3c2',
					'sha1' => '6a90c93042f60d8484e1c425c2fd211885dd30ff',
				),
				'zip' => array(
					'md5' => '2228126a7ad47c247915b31509c9decb',
					'sha1' => '6eff0e157a97d13ba36354f1b7198f01e0fc0cc0',
				),
			),
			'6.0-snapshot-20130911' => array(
				'tar' => array(
					'md5' => '0c665e8ef5c2db1a27a33116867699ae',
					'sha1' => '5f7d797513bc6648e56a1fac2dbc16f6707e18ba',
				),
				'zip' => array(
					'md5' => '110e5b71b95818cb53d5fb02627c636f',
					'sha1' => '92801b96369538d52232697008006e8f3e736891',
				),
			),
			'6.0.9' => array(
				'tar' => array(
					'md5' => '022feeab17de3b9bbc1c92dd5b75d0f6',
					'sha1' => 'dc0bd7612151038d56466c1cc637ac91c70eb789',
				),
				'zip' => array(
					'md5' => 'f7b3943ad7bbc51c8ee07315655526f6',
					'sha1' => 'a62a9c8fda7a40312ad4bf99732e5323ea63040f',
				),
			),
			'6.0.8' => array(
				'tar' => array(
					'md5' => 'd4afc2febef3252dbe16f618b2e7c7eb',
					'sha1' => 'e6cc73d396c9f127f0362d84b24ec7818f497d7f',
				),
				'zip' => array(
					'md5' => '8a9fcf32ec8b955704dd72126e44495b',
					'sha1' => '413e66f6e9a81f2d2e75169efc174c21842ee631',
				),
			),
			'6.0.7' => array(
				'tar' => array(
					'md5' => 'e3998b8da34b7e96b5adf4c8607ae221',
					'sha1' => '99fade82ab7ec8f2316e36767ef124a02c432947',
				),
				'zip' => array(
					'md5' => '2d960e0b4ada8c5dc2c89f69813db088',
					'sha1' => 'c261ff4cfc7b7ba45cca70ba9caabb094531513b',
				),
			),
			'6.0.6' => array(
				'tar' => array(
					'md5' => '9a46f36a0f16ea3249bcd875e8aed299',
					'sha1' => '9aab8a24a44ebe32176c96c1af8ee27bd698c489',
				),
				'zip' => array(
					'md5' => '593197dfd9e724358433d984ce2d344e',
					'sha1' => '8dcd02c5023f7f8eb2a4f90f2862f61ca7b19aa0',
				),
			),
			'6.0.5' => array(
				'tar' => array(
					'md5' => 'b37620d591d57332e1791bdcf1bd4396',
					'sha1' => 'b4720b75ed554b81eb1be5f00bc4fb4600ed9638',
				),
				'zip' => array(
					'md5' => '85b6e5b92cb59358826d08f082dfb64c',
					'sha1' => 'a299fede574753ff16eb1e81e80f8de7923b09a8',
				),
			),
			'6.0.5rc1' => array(
				'tar' => array(
					'md5' => '77765f311fb4c39854ffcbb897a5aa57',
					'sha1' => 'c504b7dcd4773c5036f24e937f01eaf06bb324dd',
				),
				'zip' => array(
					'md5' => '4d6a0e130b8b32bb48abb900c95f8bea',
					'sha1' => 'efed56090d4a2149fc705ac7c8b01bd9edb9ebe5',
				),
			),
			'6.0.4' => array(
				'tar' => array(
					'md5' => 'f2f0e17710217a189bfec170b0d3fa0a',
					'sha1' => 'c19fbc13a4999bfb12240c1dd5179d69b0891da4',
				),
				'zip' => array(
					'md5' => '47aefb0c2ab34991113c212f148f453b',
					'sha1' => '3fc16e35971b283a5afbc793599b95fdf8826e53',
				),
			),
			'6.0.3' => array(
				'tar' => array(
					'md5' => 'a321413176c709721840436fe42ed4c9',
					'sha1' => 'a90958589a9e5f7c2aed10d627a1f7ef6c51508d',
				),
				'zip' => array(
					'md5' => 'bfed8a5cc139c3baba8eaaa51604f435',
					'sha1' => '7ecde999bad13137238e00379e33ec2e24cdf18f',
				),
			),
			'6.0.2' => array(
				'tar' => array(
					'md5' => 'ba0102330a08f9dcd330efca97234280',
					'sha1' => 'bdcb398e24f3576041b953c079425f6ea6326fba',
				),
				'zip' => array(
					'md5' => '75ab14b99495848b4a7610dcd9db5c35',
					'sha1' => 'e77e823023044fd45d33c570f13402c4e6250225',
				),
			),
			'6.0.1' => array(
				'tar' => array(
					'md5' => '807e7fe7fc1bc4f2fa61a49f3af2ccc0',
					'sha1' => 'e34161a9a02a538266f13cfafdb59899528d4f2a',
				),
				'zip' => array(
					'md5' => '31c657b52faefaa65c5413d313b41d86',
					'sha1' => '8ab6fef634477f8d29f7ce4fc8571c27a289958b',
				),
			),
			'6.0.0' => array(
				'tar' => array(
					'md5' => '68dc23280e17532aefe0e05eec6d1f0a',
					'sha1' => '0e222f21b5c568a3a332a2742ce52efb0d190c81',
				),
				'zip' => array(
					'md5' => '307e2821c03f0e8641353a7188f5c3f4',
					'sha1' => 'cd4879e6766841b0d9e516cbb1291f650090a65b',
				),
			),
			'6.0.0rc2' => array(
				'tar' => array(
					'md5' => 'e7a34eeab15ed410817242842ed83c35',
					'sha1' => 'bfa9300c98a929b7124d18e26f5a1a77cc8e111e',
				),
				'zip' => array(
					'md5' => '8545ab2e13f67ffa7aa744ce90c34c85',
					'sha1' => '7775339c7e22054c6a63f30b8c805d5609a813cb',
				),
			),
			'6.0.0rc1' => array(
				'tar' => array(
					'md5' => '170bc8a7b9c07bba6f517e42b87824e2',
					'sha1' => '1f4195300a702bcd33b69d3c593c5c381c219a39',
				),
				'zip' => array(
					'md5' => '9ebf1d0a5508fd6a820c4a4d45d677f3',
					'sha1' => '9af8c0ed2f66ceb34813749ef558199b001238a1',
				),
			),
			'6.0.0beta2' => array(
				'tar' => array(
					'md5' => '23353e9738981e5e802f110cc5e33de9',
					'sha1' => 'daedb39c9df12aa1a0991a478456fea094de0587',
				),
				'zip' => array(
					'md5' => '7e7402d08163c1d8ec9ce01d37f66968',
					'sha1' => '94779c63087cd377c216473d0f2636cbd2583f92',
				),
			),
			'6.0.0beta1' => array(
				'tar' => array(
					'md5' => '7fcdaa9c9fa1599e693f26cbb014c6ab',
					'sha1' => '407b54aa11fe6d8523c1e41787b2384350375550',
				),
				'zip' => array(
					'md5' => '6edb634531e0e07cb9b460125475a95d',
					'sha1' => '9383bcf62c9825c45147f30e49f540010878ca76',
				),
			),
			'6.0.0alpha3' => array(
				'tar' => array(
					'md5' => '6e3608c85d502982a6c6c19f0ade944b',
					'sha1' => '205e5aa0ea2520ab048c57880ec02b1e4cd19cb7',
				),
				'zip' => array(
					'md5' => '43149a21a921f67efc210e6bb4902a69',
					'sha1' => '1196aa0923c6ed468742d2d3b19c5b17f292d8af',
				),
			),
			'6.0.0alpha2' => array(
				'tar' => array(
					'md5' => 'c02ebe6d34e08813af643a2490e7933b',
					'sha1' => 'edab8b6f701da9f4fc3ffed963d6663669ba0e24',
				),
				'zip' => array(
					'md5' => 'bebdacb7fab305f9c7da8de881c7fc07',
					'sha1' => '7189c4f1583f6a33b1792dadae779208d96625d9',
				),
			),
			'6.0.0alpha1' => array(
				'tar' => array(
					'md5' => '64fe9e159e68c16ecc590264ded6edb0',
					'sha1' => 'b71ae837679b88cb86a3a8e8c7539a04e4c42743',
				),
				'zip' => array(
					'md5' => '5757344dcf6ac85fdbcf9d75800b8e03',
					'sha1' => '9e3de5c464f257dd9f0cf9acad25216e8a316734',
				),
			),
			'4.7.20' => array(
				'tar' => array(
					'md5' => '85c2266d7282200b477b51ca9a86e36d',
					'sha1' => 'f08c5cd04d97d26c345c45320d39bdff8bc7f4c1',
				),
				'zip' => array(
					'md5' => '781fbb588c8198fc3753523cbfaf2a6e',
					'sha1' => 'f5239eda65c4b9838879757e27251cfa9aed5b36',
				),
			),
			'4.7.19' => array(
				'tar' => array(
					'md5' => '279400cfb3c1c5c5ff7f7eb9a83ebad0',
					'sha1' => '13c89cdfb668c41ed2374f3c7fa199e49ce36d27',
				),
				'zip' => array(
					'md5' => '5cf1267fe108e3a5592c0e4cdb00479c',
					'sha1' => '68842b6b5e8d28e2e25e9a937c33178ecc40cc93',
				),
			),
			'4.7.18' => array(
				'tar' => array(
					'md5' => '52055d9234adb8a0c49d5b4110c9018a',
					'sha1' => '8e05afbce7359cc437761e5c5021d1a1bf244f72',
				),
				'zip' => array(
					'md5' => '94006175a8bcbe0dbe3bb36d6f3d5e1b',
					'sha1' => 'fff457d752d1943864ba5611e5b03bd447b5430b',
				),
			),
			'4.7.17' => array(
				'tar' => array(
					'md5' => '4c3085e7f9b5e576ebdec9b7833b2af2',
					'sha1' => 'c0baf37a087085cb52888a0e0b96166c69add3d6',
				),
				'zip' => array(
					'md5' => 'fc9a7d1c75f5bf54703b8c1a31ebd334',
					'sha1' => '484dddf952cfe1bacd088aed8f6dcb8c43827d35',
				),
			),
			'4.7.16' => array(
				'tar' => array(
					'md5' => '7715e6e2f432909c3270f6afa0c9e41a',
					'sha1' => '52bc88ded5fc1a353b6b31cc21e84757942f99c6',
				),
				'zip' => array(
					'md5' => 'dbd5cc11d0f3bf15ac6e5fa782eedfb7',
					'sha1' => 'cfc899c62647e22a28bd580436d3e61fd0cbe088',
				),
			),
			'4.7.15' => array(
				'tar' => array(
					'md5' => '7c79e4c20308e3c780d228483c833cb3',
					'sha1' => '07fd4dacfbbc064d3d8119b430331f72c1597a88',
				),
				'zip' => array(
					'md5' => '6ff214be69c91eaf3a9c1997311f3aa0',
					'sha1' => '53d220578b856a5acddce08498591446153fcf2f',
				),
			),
			'4.7.14' => array(
				'tar' => array(
					'md5' => '3a944b0188ce585758c4be6faa3ab372',
					'sha1' => '4fefc8e5ea741e7e4be3fc5b96e0966755b2d318',
				),
				'zip' => array(
					'md5' => '99d24dad5fb872a90c9d995418101e61',
					'sha1' => '46337e8f35b20f7a03170f1abf552ad26bfa7b4a',
				),
			),
			'4.7.13' => array(
				'tar' => array(
					'md5' => '59c5d39aabbb6a44025e1b97f9b74073',
					'sha1' => 'd9fd6755dc799b27561bd9b3866501f93a9d7bd7',
				),
				'zip' => array(
					'md5' => '2cd818307cd4efcb58cd58b5f4361a99',
					'sha1' => '1619a80207a9b6817f57295eab39c29bab40d1f6',
				),
			),
			'4.7.12' => array(
				'tar' => array(
					'md5' => '7178a9188d5d8bdca9ad38b3a31ba046',
					'sha1' => '58dc093ee68e8a312807622b16719ece103610ad',
				),
				'zip' => array(
					'md5' => '447008208e851bcae3b3d65b901a715a',
					'sha1' => '9d6b2fd2ccf7f828e10a459fbb9ba53ece6d354c',
				),
			),
			'4.7.11' => array(
				'tar' => array(
					'md5' => 'f01345aa7da876d19c0faf4b45ff885a',
					'sha1' => '13b24a37be31efdfa0c34f7d0ec4d0ddd732ae28',
				),
				'zip' => array(
					'md5' => 'cedb903c427222c66181339ef7819c74',
					'sha1' => 'bdfbb518c340c08929edff6fcb20b6750773fa6e',
				),
			),
			'4.7.11rc1' => array(
				'tar' => array(
					'md5' => '03a9b5ff354979eb1973b8e20cd6d8c0',
					'sha1' => '9381bf5bffff1980c02dee5bfc4842b2f686cbb0',
				),
				'zip' => array(
					'md5' => '9048d3689a06e01102a8372358bccc48',
					'sha1' => '2b1494c25f790a9f8b4f7d0654928396c34af245',
				),
			),
			'4.7.10' => array(
				'tar' => array(
					'md5' => 'f085394edd8f7f11e26a63663f2ffa9f',
					'sha1' => '50d4a3610aa54ce8f184418a36ec241ea8d36202',
				),
				'zip' => array(
					'md5' => '0980d605e854be15cc4206afe7ca4b98',
					'sha1' => 'cc38dbf84ef2a998fee90b43f8f4be052a7f0eaf',
				),
			),
			'4.7.9' => array(
				'tar' => array(
					'md5' => '2c3b92f24900acbecabc2832dc072561',
					'sha1' => '543fff10412b13d38fc0130197c215dd882a0f99',
				),
				'zip' => array(
					'md5' => '1eb6fdcb5737f59481b0934e8fd05176',
					'sha1' => '627ff45e8630f35134ff864aac7716b04681f895',
				),
			),
			'4.7.8' => array(
				'tar' => array(
					'md5' => '100adacf39f58c1cfd3c34137a5cbfd1',
					'sha1' => '8f0c2f76ba8fea7934ed67008a5f0f405fab0643',
				),
				'zip' => array(
					'md5' => 'a94773fa83fd10b4c6ae215cef56aef5',
					'sha1' => 'a9a98238f91780931eb0be63bd193b9349e50905',
				),
			),
			'4.7.7' => array(
				'tar' => array(
					'md5' => '727240babda74a212a608a47938e0812',
					'sha1' => 'ceee96d0ded0ba20b36717833e8ce0488c304744',
				),
				'zip' => array(
					'md5' => 'b73435fcd5e19ccd58a1379105849c32',
					'sha1' => 'f6191c2b675e36d1d83462becb90e4ca03c757e2',
				),
			),
			'4.7.6' => array(
				'tar' => array(
					'md5' => '2c73781e351384d8a030e59b8256cf59',
					'sha1' => '32906105a90d22bd41db557fe0f0ca24f2cbe162',
				),
				'zip' => array(
					'md5' => 'ab0b69a3a78cf1fb5ee8282a7245bae3',
					'sha1' => '6b93ec79ac8832928699296705353b9035552abd',
				),
			),
			'4.7.5' => array(
				'tar' => array(
					'md5' => '6f53ac4b1c8b4f51d0b9a32ac27099ef',
					'sha1' => '63f07b223e6aa65f75a47a4dde40d355e81de6f3',
				),
				'zip' => array(
					'md5' => 'a4eac135bcf9653e2a125999e0c9fa36',
					'sha1' => '506405cd0e406e162ae6c912d1824ae642089c31',
				),
			),
			'4.7.4' => array(
				'tar' => array(
					'md5' => '809d837eedf2594c52a27e85d93cc9ae',
					'sha1' => 'a328a18fe591b10f6b5495ac90cdeef0af910fe7',
				),
				'zip' => array(
					'md5' => 'bda2792a2d9a220c81e1d20205c0c525',
					'sha1' => '3c9b72ef3c823c5a622bed2ae66f50c4f21d5d61',
				),
			),
			'4.7.3' => array(
				'tar' => array(
					'md5' => '5577ee860e1198fa970c14d9faaeb218',
					'sha1' => 'fdd4bf51efde490b47eea4af8fce7897be55ffea',
				),
				'zip' => array(
					'md5' => '00de2ca58ab273a9fc33678d1fcc9606',
					'sha1' => '59e6e859a7dcfd9ec3bbc38c8167d4414eb3165f',
				),
			),
			'4.7.2' => array(
				'tar' => array(
					'md5' => 'a71434de279a6ba52d4e8beeaa4353c8',
					'sha1' => '753e2bac1c13d77ee1edc86b8cd86de5d6166fd2',
				),
				'zip' => array(
					'md5' => '3129b69e57118432653f073b2f19d4da',
					'sha1' => '2490c2ac6f9b6139ef8b9544b0904f6c538758e2',
				),
			),
			'4.7.1' => array(
				'tar' => array(
					'md5' => 'e0a8674c3d77ba89c00a6be7f3f885b8',
					'sha1' => '59b3e978f733637975715a9ffff90e47be0bc3f4',
				),
				'zip' => array(
					'md5' => 'd0b76942b15336fd660d9234223922e7',
					'sha1' => 'ad755d55f9b5ade98cd4e5f067b295f6ea06332a',
				),
			),
			'4.7.0' => array(
				'tar' => array(
					'md5' => 'b030bce602f1ab7b7d15f35dcc93da66',
					'sha1' => '4daec16d64c27b89288f205a4b7d606c89f88bf3',
				),
				'zip' => array(
					'md5' => '42baed6db65d6cb538049dc5718a0592',
					'sha1' => '5850b40b037e817a7143bdbd694521b76256ccf7',
				),
			),
			'4.7.0rc2' => array(
				'tar' => array(
					'md5' => 'f3c9fe35b7687c64015787e1b01a8994',
					'sha1' => '7e90524077bdce2db8eab33030cbc4d3051163bb',
				),
				'zip' => array(
					'md5' => '843b16512038d7ecb93d0a5282e0121f',
					'sha1' => 'd27e9416535ba840c87baceec0027606152fe9ff',
				),
			),
			'4.7.0rc1' => array(
				'tar' => array(
					'md5' => 'c027dcebab385927c8ca52a7f187559d',
					'sha1' => '0cb26b4982fc6c2eed34ab0661dbada8315f160d',
				),
				'zip' => array(
					'md5' => '00a2cba0095a0b4df2e16a1cca665100',
					'sha1' => 'bdd4a259732f31d9e71ff7b41e77d2db1693810d',
				),
			),
			'4.7.0beta3' => array(
				'tar' => array(
					'md5' => 'd53109467ea9b91701b7d4a9e4fd008d',
					'sha1' => '9c95addbf1d6791131c4e610e269f429e009d0d4',
				),
				'zip' => array(
					'md5' => 'b1afd2b5e8d2c3b6a3dc3f71a62ac966',
					'sha1' => '534a75826e18d716b5127e32dff15863cbc79006',
				),
			),
			'4.7.0beta2' => array(
				'tar' => array(
					'md5' => 'd9f36c0e56ed433628ada0a7bf5e8444',
					'sha1' => '0ea425a2ab289c9c87655db285639bfc8d08ac09',
				),
				'zip' => array(
					'md5' => 'ac86b6c3e58659edaf4db3661849a587',
					'sha1' => '571cc089a263aab9b3364e3b9675e990e8129f66',
				),
			),
			'4.7.0beta1' => array(
				'tar' => array(
					'md5' => '883860adcc72d595ff6b5f7cfc9aca08',
					'sha1' => '09784dd7962b971da92567278f61603bac789e59',
				),
				'zip' => array(
					'md5' => 'cf85d6ff83177074dd21b6d5f44d261c',
					'sha1' => 'f36c359ae14cf4f23feb429c997210d19cdf7dd7',
				),
			),
			'4.7.0alpha3' => array(
				'tar' => array(
					'md5' => '3fbc996b5396a358a40d8c819f8b1dba',
					'sha1' => '9c0257b058b7a82d30a0e2d5b2536de9fe95c219',
				),
				'zip' => array(
					'md5' => '15c854a4a3a37e3491d8c3228e1e7db8',
					'sha1' => '6e3c2baefb8e8a3a8abcaec4bac7296c720bd990',
				),
			),
			'4.7.0alpha2' => array(
				'tar' => array(
					'md5' => 'ad66e14be18bcc53404550e1cb5ba02b',
					'sha1' => 'cb0c364beddc4cac3c14c154426782ae0700c2bd',
				),
				'zip' => array(
					'md5' => 'db355a127c40ad2e704538e96715f447',
					'sha1' => '36a11a625b17d2950ff7a8d36b2de275a3480af6',
				),
			),
			'4.7.0alpha1' => array(
				'tar' => array(
					'md5' => 'e749f1c751dcb22ea2979e82d8ead2e0',
					'sha1' => '87885d395b1a26cc61665e104e912a785070b404',
				),
				'zip' => array(
					'md5' => '67ceeedb668b53bf6dd909162292008a',
					'sha1' => 'be3be16524aea29f9c74404e430a2add1f0ca896',
				),
			),
			'4.6.18' => array(
				'tar' => array(
					'md5' => '4cbc3912abd368c86a8393c663a40744',
					'sha1' => '68769a9e1a127416ebb3b0cbde6807daa059efc8',
				),
				'zip' => array(
					'md5' => '623a0ddf9a3c9a262e9e0225b5317442',
					'sha1' => 'd4ce49707b4dec6acc7a46cd4e652fa2ea4b3290',
				),
			),
			'4.6.17' => array(
				'tar' => array(
					'md5' => '135fa586b6a34c11599f4329abad0060',
					'sha1' => 'c5383ef39c3861e0c2aaafc3551cfe618b67efe4',
				),
				'zip' => array(
					'md5' => '6a126c79ac91f0d6b0e525cc59999001',
					'sha1' => '77a543769ce0b8f6be63c0c282cf361a5a7d2827',
				),
			),
			'4.6.16' => array(
				'tar' => array(
					'md5' => 'a9bba952f62eb82312d0513468babffe',
					'sha1' => '5a3ada5f5b7edb8a9af3699eaf377d8720d467f7',
				),
				'zip' => array(
					'md5' => 'acbcd05ff13cedef3a4c502cd05369ec',
					'sha1' => '9924f27e643c73a1281ed412d4b713e6ad1c53ae',
				),
			),
			'4.6.15' => array(
				'tar' => array(
					'md5' => '7668ec8731709fdcedd4114c329796d4',
					'sha1' => '1b4a20d43d8a0cd5343a292b3db0d1d867a56d81',
				),
				'zip' => array(
					'md5' => '937cd1a4508f8b8e551abc67c58f1980',
					'sha1' => '8e9ec3bef3ee9bfbf97cf121b157d2442411047f',
				),
			),
			'4.6.14' => array(
				'tar' => array(
					'md5' => 'aa629a826bbb251137fdbbd392bfc773',
					'sha1' => 'c30467c406f411a44262a9d7f0ac7b49d0357d58',
				),
				'zip' => array(
					'md5' => 'f8fdc2b797732774643fd0a0497fd342',
					'sha1' => '7119dc9e55b4ff2c098ec0bc34b605e2f4bc1a6b',
				),
			),
			'4.6.13' => array(
				'tar' => array(
					'md5' => '14fffca142718b458909e2a072bc4f2c',
					'sha1' => 'fcefe56c02561d2237f89637823e14a3c052284a',
				),
				'zip' => array(
					'md5' => '7595c4dfdd55e82c5b517f90aed62983',
					'sha1' => 'd4a5d42594bf9116145b81cadc1c7314584dc5df',
				),
			),
			'4.6.12' => array(
				'tar' => array(
					'md5' => '063ff6ef8ed93dbb2f48d447fbe757ae',
					'sha1' => '5cb0d92656f909fb24af6c6c3df89e46e356c151',
				),
				'zip' => array(
					'md5' => 'dd08fc74c4bb9fcf1f8c2c02fbb27cda',
					'sha1' => '75a15e6af45f8875da428b19aead33ddde3a1bbb',
				),
			),
			'4.6.11' => array(
				'tar' => array(
					'md5' => 'e938a0e628db03d4a37db1f17081828c',
					'sha1' => 'd31c97f07194631884287ae46c9e9f128f3082ee',
				),
				'zip' => array(
					'md5' => 'f3aed176ee5626b45f341e6b60a71c6e',
					'sha1' => 'b82494644387defd67fabc64e96636d67e8234c8',
				),
			),
			'4.6.10' => array(
				'tar' => array(
					'md5' => 'cbf95dfa209c41616f7ec3b261f461c3',
					'sha1' => '6bc6644c2bf2da45fcc6c6b7780a4ce166c31f11',
				),
				'zip' => array(
					'md5' => 'b48fcb0fbdb17bd56f1e252cdf1b6787',
					'sha1' => '28b59c277d4e5db8ccf380b78dd7fa4359969e4b',
				),
			),
			'4.6.9' => array(
				'tar' => array(
					'md5' => '69dd6f277c739f741a0a2c3a39047117',
					'sha1' => '4f702b1bdde2dc2b8c8fe9f83c04113bf39e65a0',
				),
				'zip' => array(
					'md5' => '898b155e1fd720f07bdd717f7db485ef',
					'sha1' => 'c9eb7798ab2a144bbdfe026ab73dc7fa4e0135cf',
				),
			),
			'4.6.8' => array(
				'tar' => array(
					'md5' => '7a9cda0b35085fa1f716ddca4402b458',
					'sha1' => '1965c89fb5057220c42cdb8d506d374ea5013edf',
				),
				'zip' => array(
					'md5' => 'c8f217bdc58b0da234dda237055affce',
					'sha1' => 'b5611fac6062d2ec9c2a2f51ea6fe88c9b92ef8b',
				),
			),
			'4.6.7' => array(
				'tar' => array(
					'md5' => '6d451794f1c9f2830255fde41e60fc5e',
					'sha1' => '461cef5e92814859423dc98407712d00b7956353',
				),
				'zip' => array(
					'md5' => '60682a77f94495807352d50cc360ef3e',
					'sha1' => 'e4579d992e554848cf063d1d47c8e062cb8377f3',
				),
			),
			'4.6.6' => array(
				'tar' => array(
					'md5' => '0154407282f65fd959ef701edbdce002',
					'sha1' => '9937147f4770817004c57523c273f00ed8d4724e',
				),
				'zip' => array(
					'md5' => '9af21b47993daa7775987c05f8fbffbe',
					'sha1' => '59a1fb824d5ab2785505a35c45046c97b99d9cd8',
				),
			),
			'4.6.5' => array(
				'tar' => array(
					'md5' => 'cf285360306f865d2dba1aafc7b069d1',
					'sha1' => '79dfa4986e89ca7d9a3f7691fa0cddefb9b58b93',
				),
				'zip' => array(
					'md5' => 'f9072583b15d37e5b183e980f035964e',
					'sha1' => 'ed9c39c050c1b0626d907944d8e1444236268f4e',
				),
			),
			'4.6.4' => array(
				'tar' => array(
					'md5' => '2ad44ed21afe3c168f73db7c6fc83c3b',
					'sha1' => '6f784831839a209cbceacdde094cf747136a2c88',
				),
				'zip' => array(
					'md5' => '66c23b90f6169e4eb33fa3d4fef59921',
					'sha1' => 'b0a82693903c3df5519282729a91fad68aec0cb0',
				),
			),
			'4.6.3' => array(
				'tar' => array(
					'md5' => '652fc5278eebd7b955b863664134da8b',
					'sha1' => 'bf6c4f36c5f33eb992b36f7586b4026390400cb6',
				),
				'zip' => array(
					'md5' => 'ff34e2c46496549c65aef6ed9fa7cd84',
					'sha1' => '1a5aa5f4159dc7cdda0f1467fca80bca25204343',
				),
			),
			'4.6.2' => array(
				'tar' => array(
					'md5' => 'bc56852e5927e295cd17a0b2d74c10e0',
					'sha1' => 'df154b7eeb438a5773e3146a38f5f8bcaef3e6ef',
				),
				'zip' => array(
					'md5' => '8b2009c7a64c63ddccd253400a91e633',
					'sha1' => 'd2c370849573bf4b5f54d856d9517bf1d9d53cf3',
				),
			),
			'4.6.1' => array(
				'tar' => array(
					'md5' => '10a14728a3d50971fce6b304521ba6a1',
					'sha1' => 'ab4dea9f542a418d7b332c6d64e2749cb8806963',
				),
				'zip' => array(
					'md5' => '2088caa4357cd823ec143e52714d1c50',
					'sha1' => 'c02ce616a28b7624635b56c4a0a6153d92cd3d85',
				),
			),
			'4.6.0' => array(
				'tar' => array(
					'md5' => '9959cacc6ff08ae9c5d12670ec7feaca',
					'sha1' => 'd338528ca1ee0ee1aa2bc630b80e43569529ea01',
				),
				'zip' => array(
					'md5' => '20b8e24316abb0386689b228c9a776ed',
					'sha1' => '3382833c7d30617005537850366f2ad79bb13407',
				),
			),
			'4.6.0rc1' => array(
				'tar' => array(
					'md5' => 'a51097d544e985a83eb336e8d143e229',
					'sha1' => '49041ac4606bfbe9c8dad7126247874a11a70283',
				),
				'zip' => array(
					'md5' => 'e3c21c3be90eaa9bb9b96fc4928d6308',
					'sha1' => '466edfad2b7e742aa7f873a5ca735d63a542dd1a',
				),
			),
			'4.6.0beta3' => array(
				'tar' => array(
					'md5' => 'b6fad8690c8549c80164260344712b97',
					'sha1' => '0243275648afb901decf87085b0030a3372c6fb8',
				),
				'zip' => array(
					'md5' => 'ab2be7cd4144156fca89e95b3e45425c',
					'sha1' => '062e7ff3248a0819d95ee55ddd77be9185b39445',
				),
			),
			'4.6.0beta2' => array(
				'tar' => array(
					'md5' => 'a7d16b207a251e5ad4767c00f9596296',
					'sha1' => '674e3257615e61d9df3a8d04dcc9863d8d70bff7',
				),
				'zip' => array(
					'md5' => 'a365831b898f10b774d1ca8ef1b085eb',
					'sha1' => '433e066814bb1ea2a301744c309e9025d57c0396',
				),
			),
			'4.6.0beta1' => array(
				'tar' => array(
					'md5' => '0f01ce0c0a52a8e01863374add135190',
					'sha1' => '97b9a1f860dbe4d88e237898e1c7c914827b9c0c',
				),
				'zip' => array(
					'md5' => 'c56f34be07a8026fb01c52559f81db1f',
					'sha1' => '55660de760ffd208992163973d18d7785629d798',
				),
			),
			'4.6.0alpha3' => array(
				'tar' => array(
					'md5' => '258be8e8bf48daac26ac917ddca85d2d',
					'sha1' => '04578492848d8bc47b70669a525eb9470cac47a5',
				),
				'zip' => array(
					'md5' => 'f144c8cb17c5d707ffe4ebb2caf276cf',
					'sha1' => 'fc8c6529f1521f1fc4a70524f5ff4c19452b83dd',
				),
			),
			'4.6.0alpha2' => array(
				'tar' => array(
					'md5' => 'c96615711619ad690e98a46a92bb02d0',
					'sha1' => 'd232cf2b5c69b31624906cdf6671ab7f2c0d1cf4',
				),
				'zip' => array(
					'md5' => '26f10fcab2fc82a93c5381fa94048bf8',
					'sha1' => '4089e8f5456ed69521838781e4b211a6f20c1885',
				),
			),
			'4.6.0alpha1' => array(
				'tar' => array(
					'md5' => '1c2853d65678f279ae4816807aa71336',
					'sha1' => 'dbeb74cad3838054ab939c8dae2143a5cba325da',
				),
				'zip' => array(
					'md5' => '3d93d9414adab991c69c15a4dbc11062',
					'sha1' => '61245ede74fbd4752cc8611d9706fce29edf7b6e',
				),
			),
			'4.5.40' => array(
				'tar' => array(
					'md5' => '75dc19184abfec84c384f31a7b353b6a',
					'sha1' => '290acdeac2dc1937ce0cfb1d7ea982cd1b0b7398',
				),
				'zip' => array(
					'md5' => '03bf82bfe10f13022af80f038d75fe4e',
					'sha1' => 'd92dd3ccde15ccb64357bbb20fdcffb987d273d4',
				),
			),
			'4.5.39' => array(
				'tar' => array(
					'md5' => '39b1707b1202d3f350092efb7dce72d4',
					'sha1' => '2288cf2ec430652126fadad9af12509ff0a9b70f',
				),
				'zip' => array(
					'md5' => 'b70056dfbc9bcc8ec24939e2edb11157',
					'sha1' => '45c2d719593005481dec14b23816cb1fd4e0dcd6',
				),
			),
			'4.5.38' => array(
				'tar' => array(
					'md5' => '745057a3ba8fae33d54158b4d630aaa9',
					'sha1' => 'ca0e51c77a475907bd3d9cce6777bbde9eb91a05',
				),
				'zip' => array(
					'md5' => 'f244f1d96222b56eae34a04e6bd78fed',
					'sha1' => 'fc45e54a6954de39cc233b6a0cb9b3367a8ac4b7',
				),
			),
			'4.5.37' => array(
				'tar' => array(
					'md5' => 'ac5d93a7c27c1d529082621b500d29f9',
					'sha1' => 'f7eaaf9e6cd41ac5ee50f0589002dea34e6424bf',
				),
				'zip' => array(
					'md5' => '30f702d8ecbeeb7f1c145254c2eccf89',
					'sha1' => '3e1209179dee9218f257c7a530cac91f46024acb',
				),
			),
			'4.5.36' => array(
				'tar' => array(
					'md5' => 'b30945a2a883b724315d7253cd4816f7',
					'sha1' => '4c3cbde2ec793d5354b326a3084a06de88581da7',
				),
				'zip' => array(
					'md5' => '88550b431a392fd4fd4a813e23c9a4a8',
					'sha1' => 'af472b85eb21cdda4f73769d479bef4409c05820',
				),
			),
			'4.5.35' => array(
				'tar' => array(
					'md5' => 'f5385631a2b1c5269abe64efeea6c6eb',
					'sha1' => 'f7bdf802613d0d930312512c17226597d87cac00',
				),
				'zip' => array(
					'md5' => 'd86ccb82edc0f032190cb7cd68b14d93',
					'sha1' => 'e3dab2b395a3f16828719e7f9dfb0a5240b6100c',
				),
			),
			'4.5.34' => array(
				'tar' => array(
					'md5' => 'e481ff33d7c27654524f2006577f0f0b',
					'sha1' => '7e55eb941871406d8f97fc9389b8273813c8e430',
				),
				'zip' => array(
					'md5' => 'c4cb7bd9a7c7a9d37b8af2a41745f4ff',
					'sha1' => '7499b179d675135d481157ee9adb752c4e976e71',
				),
			),
			'4.5.33' => array(
				'tar' => array(
					'md5' => 'a715a4660e0128bf4bbe7b8de9ea346d',
					'sha1' => 'cde33d22c0e3e09f634758efebba58c0e778019f',
				),
				'zip' => array(
					'md5' => 'e31714cef66460f946b1ef845d29aef2',
					'sha1' => 'daac617c646dc592391235735683166f55745329',
				),
			),
			'4.5.32' => array(
				'tar' => array(
					'md5' => 'a7dc7474dd60b210b97c60a3f07141fe',
					'sha1' => 'ce39440fc1f69088dad6f78e7c655990c4300397',
				),
				'zip' => array(
					'md5' => 'ccd38a5bbccc295749de2ede52e1ff1a',
					'sha1' => '8b29ce77d50b203b5334ae6389d898648d675e37',
				),
			),
			'4.5.31' => array(
				'tar' => array(
					'md5' => '3715e5c6ef76d352f47317e633c950ae',
					'sha1' => 'e54aae15a824bbbb38a7b7637b51ca157ce5c186',
				),
				'zip' => array(
					'md5' => 'f67fe39a9fa6c16553882dbdd4fab03f',
					'sha1' => '3ec734ba3ab9c1982b95d0795ad40b56cb4980be',
				),
			),
			'4.5.30' => array(
				'tar' => array(
					'md5' => '7cee9cec79f17015fce178ea18bff0c4',
					'sha1' => '1d868811a39492464e64fa813299bb5a99d5d562',
				),
				'zip' => array(
					'md5' => 'cd1efb804d82c879fa034e5ca35b4b59',
					'sha1' => 'ed32b760eb2943aaedf595b1a3ba863c1dd908a9',
				),
			),
			'4.5.29' => array(
				'tar' => array(
					'md5' => '34dfb38409676d107f72e397eb941783',
					'sha1' => 'a1b27f10c8115a5e3ac5d8ab0895ae2894397442',
				),
				'zip' => array(
					'md5' => '9edbcdfbf6c2314757aa4a5e883b067e',
					'sha1' => 'f39bfa984be04fbadbb842807306d414082203b0',
				),
			),
			'4.5.28' => array(
				'tar' => array(
					'md5' => '052379d5ae6cca1909026cc094a79604',
					'sha1' => '09de305de1a9f4cd1928191a911730bfe3aa544f',
				),
				'zip' => array(
					'md5' => '5efe9f00efeb0778ec4013a3076d5f7a',
					'sha1' => '995d509da606dedff881222504275825d493e58e',
				),
			),
			'4.5.27' => array(
				'tar' => array(
					'md5' => '6997b6e3dedad5852ae879762e95588c',
					'sha1' => 'b51773607fe4700810e14a0d76eae156c09bdaf5',
				),
				'zip' => array(
					'md5' => '78813f29ad3c1d5f1299dc84cbf0e138',
					'sha1' => '68486909a22464e3a7abf864f5f06de4a4e249e0',
				),
			),
			'4.5.26' => array(
				'tar' => array(
					'md5' => '06cb7852c5c471b62e43f97926520835',
					'sha1' => '34827130a5d000b7a102457f34c41b7b7d46a39e',
				),
				'zip' => array(
					'md5' => '3563d5b76f761f33cda29ceb1c7e7f97',
					'sha1' => 'fda550d1828483b5f5ed3e8ca03f14001394ff4b',
				),
			),
			'4.5.26rc1' => array(
				'tar' => array(
					'md5' => '638c6b29ef9c32275456f17fb9a2019f',
					'sha1' => '55cbb2daec9e83f3c7b8fb02ca5c2986695ead61',
				),
				'zip' => array(
					'md5' => 'b5a54af1987e83f5b5e2ae67e575d559',
					'sha1' => 'ee19f8a3c919e064720bd723d5c3d3fd70ebddc0',
				),
			),
			'4.5.25' => array(
				'tar' => array(
					'md5' => 'a8f10e9fe5736f02b80558d9860361f6',
					'sha1' => '7108e2d0b95a21258a7ee2b7f450d4d446cbac8e',
				),
				'zip' => array(
					'md5' => 'a87512b89b16abb72321c4ce6a972f95',
					'sha1' => 'a8007226a866ff33fde6cdf63e78edd5427052ce',
				),
			),
			'4.5.24' => array(
				'tar' => array(
					'md5' => '8de5941f5b1ebeb7deb92fc84b29e8bc',
					'sha1' => '8e62acb92e41ee322fafa36ef29b48c76f293781',
				),
				'zip' => array(
					'md5' => '1108ab2ab117d26a75e5e0c0693b2d64',
					'sha1' => '013ca01b9f3a327db8dc2c129f04547e600b3c4c',
				),
			),
			'4.5.23' => array(
				'tar' => array(
					'md5' => '6a59f05839815109dec21a6e769ca54e',
					'sha1' => '7b4a682957e28fc68e67d5fed5fd5b50a9ba1574',
				),
				'zip' => array(
					'md5' => '3fd6bde829d1901fe2e42f78bdac5a7a',
					'sha1' => 'e77895862fbdd953cfd892c9e328cb0d92b59d84',
				),
			),
			'4.5.22' => array(
				'tar' => array(
					'md5' => '140a119b96b0c45c14403019541b9709',
					'sha1' => 'befa30e4c714eb2c3ad12037d36709e10631323b',
				),
				'zip' => array(
					'md5' => '4e318ad3cd27c50b97eaddfffbf144f1',
					'sha1' => '0eac9a620b20625a759a88270adbd3d73388c190',
				),
			),
			'4.5.21' => array(
				'tar' => array(
					'md5' => '267ea8ed73faeb72f4063617ba7af974',
					'sha1' => 'c8b4d90e320d1122b87f522564b822c3e783202c',
				),
				'zip' => array(
					'md5' => '56bfe5aa29c12b7bb5d8261611eec88e',
					'sha1' => 'a3bf1c3d03e9831ae4e10d8da415f9be31aa0a94',
				),
			),
			'4.5.20' => array(
				'tar' => array(
					'md5' => '67c0906d065ec2f5cbacf6bce6253472',
					'sha1' => 'b70fb078172f58b3f79c3862f3e4322e555250ec',
				),
				'zip' => array(
					'md5' => '7e95fb3de385f8f0ecf78b8bcca065be',
					'sha1' => 'af54d1b7001a2b625e37165faeffadc18ddf5a89',
				),
			),
			'4.5.19' => array(
				'tar' => array(
					'md5' => '3c7aa1ee67b62d5dbfcb381486dc89c1',
					'sha1' => '1b51640e5df38f3e81a6b8192dfc3925a1a48249',
				),
				'zip' => array(
					'md5' => 'a3157d73d744ee22f9b155b438c0146d',
					'sha1' => '95fee94d7f1c1016dff34fa2c5fd8ceffd3b7455',
				),
			),
			'4.5.18' => array(
				'tar' => array(
					'md5' => 'fb6aee4d7820f40e7ca2c9848450bc30',
					'sha1' => '4535e0ddb9e595328e0c4bd7969e036acd6bb9c2',
				),
				'zip' => array(
					'md5' => 'dac3dae6fd2fbab6cd60b02a62291735',
					'sha1' => '58df45e8ece8fbe169516a463ff91f543b3e799c',
				),
			),
			'4.5.17' => array(
				'tar' => array(
					'md5' => '8791cbeda59f3f1ca3db804857f8cbd6',
					'sha1' => '702a7508a77a2abe467282c2bbf1b2ebbe37e70b',
				),
				'zip' => array(
					'md5' => '007bed9193fd4f5db711a25cb85ed3fd',
					'sha1' => '555a3ea951f769771521435ba76cd449639fec6d',
				),
			),
			'4.5.16' => array(
				'tar' => array(
					'md5' => 'e8c54e1c3d5a3c11c802fbbe7a1b71c3',
					'sha1' => 'bc6b5cb9114dac6228a5a878059aa43acdab5bf7',
				),
				'zip' => array(
					'md5' => '3c70017eaa851ac46ee1bf2a2373a44b',
					'sha1' => '73613ca2a0147b08e9a3c031109792b0483acde2',
				),
			),
			'4.5.15' => array(
				'tar' => array(
					'md5' => '527f3b78421fffb9d5c2f5fc62a544b6',
					'sha1' => '3edf004111393c6fa4da69a8323fa296cbf77dc2',
				),
				'zip' => array(
					'md5' => 'df3c0ec798c70181fbb3f152838bddc2',
					'sha1' => '018c6dffb4ef6bc9bf80363fb899ce5b6ae8f072',
				),
			),
			'4.5.14' => array(
				'tar' => array(
					'md5' => '7c5feebbbcb217b1f7c63b096df4951d',
					'sha1' => 'a055fb7d857e8251b57e93d2379870d31b000930',
				),
				'zip' => array(
					'md5' => '6a9873fcf3abb6ad9dccc57b89f58adc',
					'sha1' => '51d9fd0be16ceeb13f6101e7718afc572f2d2a0a',
				),
			),
			'4.5.13' => array(
				'tar' => array(
					'md5' => 'e2895177eab7091ba217c4a9e51ccfaa',
					'sha1' => '692d59fdc6ca658cde9d6e6e305ba3c55121e4b4',
				),
				'zip' => array(
					'md5' => '1a65e2e19ed440a3ad0a20907d0e5ae2',
					'sha1' => '7c4d7037b036e00aa23a897517e55f576b293564',
				),
			),
			'4.5.12' => array(
				'tar' => array(
					'md5' => '1f2076e858b82441f4de40efe56ca7ad',
					'sha1' => '300277031cf9424b5ecb6901f2f4172b3b5ed116',
				),
				'zip' => array(
					'md5' => '98942c288e60a984b1cab455c65bff48',
					'sha1' => '5cbe4c9d62a5e7476b6134a37f4b850fa50e4d2d',
				),
			),
			'4.5.11' => array(
				'tar' => array(
					'md5' => '0b4f2d4a85c4676306fc1b9aa31d8db1',
					'sha1' => 'ff339747109b1f2672acc74f77b0c663b6813dbc',
				),
				'zip' => array(
					'md5' => 'd3b51f146cccaf2ab0e6a5c4a26fb3d8',
					'sha1' => '4a465eb6efe919b922c59fc1ea057547bed04973',
				),
			),
			'4.5.10' => array(
				'tar' => array(
					'md5' => '33cf393622c3b4cc2a5998ce8cc41c30',
					'sha1' => '2cfd9cd2ead0c5acaafb114df8d7b0f64b3fb316',
				),
				'zip' => array(
					'md5' => '71a0bdaa036dfd5b6339655965ce11dd',
					'sha1' => '0a50dcad94b5bebbde72716bb75f408361d8d24a',
				),
			),
			'4.5.9' => array(
				'tar' => array(
					'md5' => '9f5911c49973f2cdbc0b04d6a4635f2e',
					'sha1' => '9a25a91e3b5f79b1e16e31d646011efcb2db1e09',
				),
				'zip' => array(
					'md5' => '75b0e11ce7270707f712202eab611576',
					'sha1' => '8cacce829964cbc7c059ca80cdecc15f02e12e70',
				),
			),
			'4.5.8' => array(
				'tar' => array(
					'md5' => 'e6e77e6407ae3f05981a7a973c078846',
					'sha1' => '41b822ff87539868c6f83f4eaa724e2e1d23beb4',
				),
				'zip' => array(
					'md5' => 'c8794bc22e080d7ef9a9c7f1a1bc1bec',
					'sha1' => '0ee94a39d8c4b379e028945c6bb75ca8bcaa0e86',
				),
			),
			'4.5.7' => array(
				'tar' => array(
					'md5' => '001fb058b4b66903395bfd4533d7bfa8',
					'sha1' => '140dfe379ad5572d76daeafb139e3741cbb4eb80',
				),
				'zip' => array(
					'md5' => '714a802aa052e95d9ab203e615c5041f',
					'sha1' => 'a02c5d4ef72318de18833a5a2e15ba6f78920d72',
				),
			),
			'4.5.6' => array(
				'tar' => array(
					'md5' => '22f1a572fe1f996279112d7c43af16e1',
					'sha1' => 'b9043f541287c815d5d4170f78e43c9ba0169238',
				),
				'zip' => array(
					'md5' => 'ee91cbfdd7bf47b357cc9e10ac296d10',
					'sha1' => 'a2075218ab768c7632444df465820b5d0eee5b09',
				),
			),
			'4.5.5' => array(
				'tar' => array(
					'md5' => 'd135fd9db8bfb59e94ec9918bf8b149b',
					'sha1' => '8c864aa7c67b703443a5889a4684f6aed6af254b',
				),
				'zip' => array(
					'md5' => '2d11315cf6a58895baef142b6e21758b',
					'sha1' => '3b3b26f8c48302662835005c387a5ce568fc4b31',
				),
			),
			'4.5.4' => array(
				'tar' => array(
					'md5' => 'f78496ed0f1d0e1cd28cd6064f2226b9',
					'sha1' => '12ebacb41592b4594cf3eca4896397ce0e86d5c3',
				),
				'zip' => array(
					'md5' => '202570cdd6dd88751b78b05824d07029',
					'sha1' => '8e08be2142e19e00da33f0e8f6922370edd61bc6',
				),
			),
			'4.5.3' => array(
				'tar' => array(
					'md5' => 'f736ade0a3effe81be3d7849f68c6443',
					'sha1' => '0e36d809424b5626c50006658072852791ad21e1',
				),
				'zip' => array(
					'md5' => 'c71f6973518bd22a797eed41500ae2ff',
					'sha1' => 'f90ed17dea4e7c7cd11cf190cdbabee585088e89',
				),
			),
			'4.5.2' => array(
				'tar' => array(
					'md5' => 'd9c8f325c9ad63437215792c17ac1676',
					'sha1' => 'ad4519a9a4f326455140186516f8af45755aa271',
				),
				'zip' => array(
					'md5' => '8b4ebd7129ea35b7b9d68f5d57e5cad6',
					'sha1' => 'd39748fc69581da21b0b2cc661c11555d533b720',
				),
			),
			'4.5.1' => array(
				'tar' => array(
					'md5' => '6b7012da6953010673d9990d9bf0ca9e',
					'sha1' => 'cdd6707a483f2567cfbdee35111ffa030762d265',
				),
				'zip' => array(
					'md5' => '884d832ae93023b9506df7eb67f91f05',
					'sha1' => '197cffacb88756b2cda2e96b1ebfa5c38cb8a56d',
				),
			),
			'4.5.0' => array(
				'tar' => array(
					'md5' => '3c71550910bb7337091d8d849e9fcf6c',
					'sha1' => 'd2c9c433e96df97b4d61064a8846b06868f1a221',
				),
				'zip' => array(
					'md5' => 'b00c7b54a28d187066474ddb5cbd1ce8',
					'sha1' => '008fef5947ddd69261f3690ff1c5503dd16e478e',
				),
			),
			'4.4.15' => array(
				'tar' => array(
					'md5' => '816b357141eefe751199a7f1ae2b5785',
					'sha1' => '73c3cd25f9f448741b42eb0570b9c8da06f3e645',
				),
				'zip' => array(
					'md5' => '329f88fee0447a5077f394786bfa4326',
					'sha1' => 'dafcdccd4f6b4813591815174c2134a42e5cea58',
				),
			),
			'4.4.14' => array(
				'tar' => array(
					'md5' => '55a4a1b7df9efa91feae3160b60f2081',
					'sha1' => '047b409d31c30428bb1de973a6254c2bf2163c75',
				),
				'zip' => array(
					'md5' => '78cff41cf3cb03b07150dfaddc13c6d9',
					'sha1' => 'acfde95db3435012d927a069081dbb2adfb7c5a1',
				),
			),
			'4.4.13' => array(
				'tar' => array(
					'md5' => 'fceca97a26f9111bc028a4c58ecfaacd',
					'sha1' => '534cc530392bb4a366e538beba1bcdd7d5046e67',
				),
				'zip' => array(
					'md5' => '31163571053f5ce75bcf4df7fd5887fa',
					'sha1' => '4f73856e4a8c1030e38b4a14a179150996ccd7dc',
				),
			),
			'4.4.12' => array(
				'tar' => array(
					'md5' => '027b244cab664b1d63812934c57ea388',
					'sha1' => '0a056bb9fa4b8c9343c99c6a43cbd5a002af5170',
				),
				'zip' => array(
					'md5' => '0e7498f4afb841d03eb28ab158265a7d',
					'sha1' => 'eeb2082b4636171a18722d43fbb80017cc0a19ad',
				),
			),
			'4.4.11' => array(
				'tar' => array(
					'md5' => 'd942dc969ec92387ed3b13a5c336f634',
					'sha1' => 'cdebe3258c385ef7aaf0384270a949df42653ae8',
				),
				'zip' => array(
					'md5' => '7f6ee895460300ef2d820d8e13265fb0',
					'sha1' => '73fa2fa19678bda0d113da470cdab6143f517147',
				),
			),
			'4.4.10' => array(
				'tar' => array(
					'md5' => '18b1d08cdabd3e39e6e52c00f7f978fe',
					'sha1' => '0a66b5b2a7ce17ab9fed6c224f4eaed00fcd03be',
				),
				'zip' => array(
					'md5' => '160a0942fa2fb3877e1ded0f4142a980',
					'sha1' => 'cd680c648b92af69f1bdca0bd83aa64c99202f7d',
				),
			),
			'4.4.9' => array(
				'tar' => array(
					'md5' => '16728ee23e916558b9bfcde1b2bbe9e2',
					'sha1' => 'b90cdc8e12cf8ec7ace970a55d9f6f3a0f5fd119',
				),
				'zip' => array(
					'md5' => 'd1de445b8908d8d1a8352c8829541eb6',
					'sha1' => '627413f692718d195b6e93337b99c1d4642609b9',
				),
			),
			'4.4.8' => array(
				'tar' => array(
					'md5' => 'd66dfb291914823879a01ccef59e0bdf',
					'sha1' => 'c6861e44e47865bf22c6e84f587644850894b1ce',
				),
				'zip' => array(
					'md5' => 'a1d50452f005478cd7b94800cf85f762',
					'sha1' => '67cd6aeda2d4acf0b2f01f638c41a800a568c755',
				),
			),
			'4.4.7' => array(
				'tar' => array(
					'md5' => '77ec411f06cd16f0379958c09116ca90',
					'sha1' => '20236befe722da01b53ce900d0371ec140f1f56d',
				),
				'zip' => array(
					'md5' => 'e97bd6c41e68d480c6c5dc760b71e2b2',
					'sha1' => 'ba9bc1e8ad5cffeecc328a92238063732eafed28',
				),
			),
			'4.4.6' => array(
				'tar' => array(
					'md5' => '3a1f4416649dc51bd18efa4b5c3c7c28',
					'sha1' => '0728827dae0e204beb3fa46773ba4b7acf4aff4c',
				),
				'zip' => array(
					'md5' => '1f5fae15d75e9edb927a2b16d47e1b23',
					'sha1' => 'b6531996599d8c9375e5ac0823644ffe3deb63f9',
				),
			),
			'4.4.5' => array(
				'tar' => array(
					'md5' => 'a226de5ca324134ebc9effbed5fadc79',
					'sha1' => 'bd01d7ace34376bb67811199ee57721e1e6e196d',
				),
				'zip' => array(
					'md5' => '453f1d4fb5810d75341e9037ae09a22d',
					'sha1' => '7f76da3bf2641cb1c36999c52d7b23036acb9c66',
				),
			),
			'4.4.4' => array(
				'tar' => array(
					'md5' => 'b8c8f8fb78e1a33b786ebb8317153b3a',
					'sha1' => '396a9472e231b3fad1b5b3615f89ea72848af962',
				),
				'zip' => array(
					'md5' => '20e3334a2229f917445014b457c96398',
					'sha1' => '5f7f4954524f3f510953b2dd50e2141596a264b7',
				),
			),
			'4.4.3' => array(
				'tar' => array(
					'md5' => '22d496e941b19ae26d374f1ea44c6d44',
					'sha1' => 'eee12655626d4e75a05758ad5d7afa5023a79e01',
				),
				'zip' => array(
					'md5' => 'd06bf08ddf8f526bd8e246690617574f',
					'sha1' => '6b2e524aba79e7477a3e2e8d702620e74f509805',
				),
			),
			'4.4.2' => array(
				'tar' => array(
					'md5' => '122f5ad6df04ded73f655503b63daa73',
					'sha1' => '2a6e332bb1775661bd5b3ef7b7e2933ae754a1dd',
				),
				'zip' => array(
					'md5' => 'afb72fd27a79af73059bf540d93a3910',
					'sha1' => 'ebbc639a05e1223dd799bdd1392262069ae69383',
				),
			),
			'4.4.1' => array(
				'tar' => array(
					'md5' => '814955d60dbf5a7c043f23a158aa43bd',
					'sha1' => 'a958639f7bde7a1d66d186d37c458fb9681c1d3f',
				),
				'zip' => array(
					'md5' => '2a4e2f4aa0c0ef72fb710cdc809516f7',
					'sha1' => '80b8f50443b574d7ab9374a0de624ba789b9f65d',
				),
			),
			'4.4.0' => array(
				'tar' => array(
					'md5' => '665b1a28ad1dfecd07ffef799f54fc52',
					'sha1' => '2e357098f1522538059c0d5e2b979cec0d2678ea',
				),
				'zip' => array(
					'md5' => 'fb386311ab6e8485d7314d72cd4fb84e',
					'sha1' => '1451e6fd33436d52ed987ed801ab6e9f46e326b9',
				),
			),
			'4.3.14' => array(
				'tar' => array(
					'md5' => '85271c2cd1e339dc3f964e896e8ceda2',
					'sha1' => '4c0b5f2b8a93ced0cd24f6322ad38e4b15dbe121',
				),
				'zip' => array(
					'md5' => '22adfcfc7c61c4b41d6ed9a68b2711de',
					'sha1' => '2efc18d16af167775905c7ae2e8026a7ad4f3d18',
				),
			),
			'4.3.13' => array(
				'tar' => array(
					'md5' => '36367b8b26d2e97e224715350df60070',
					'sha1' => 'd3221c9a74956cc24efa16b43ed5c5cab15e96a2',
				),
				'zip' => array(
					'md5' => 'f49a6e68edc494ee090fcd8e572ccf9e',
					'sha1' => '7ed4c72df9b8b7bccee62b55119829ff6141e3b1',
				),
			),
			'4.3.12' => array(
				'tar' => array(
					'md5' => '4e83accb5c84d49c9c1ae169373b7346',
					'sha1' => '8abaed3767ce87511ed9c34318bbc754da62d9a3',
				),
				'zip' => array(
					'md5' => '1218e40fba46f3929cd6a54db087529c',
					'sha1' => 'b18507f29adbde88b136fd9dbece4fcc8cd41139',
				),
			),
			'4.3.11' => array(
				'tar' => array(
					'md5' => '44587ce69cd89b7ec8493c76f2888fc2',
					'sha1' => 'fe731642109404f21979cd435dceafeac61fc85a',
				),
				'zip' => array(
					'md5' => '14f7a0ec5cd3cae9370c5e463f322aa9',
					'sha1' => '4cfd6983989c17d25f947cddd9687dcb9a6de500',
				),
			),
			'4.3.10' => array(
				'tar' => array(
					'md5' => '054c6a947dd199172972d891a050d3d6',
					'sha1' => '0ee4a7f2ed3c78b9257fcff49ca238c989479d99',
				),
				'zip' => array(
					'md5' => 'bca8416ca83f88e98dae82e5c4c772f9',
					'sha1' => 'd7e2e75a3e2c054edaae91e28e8baaccf8c8dc76',
				),
			),
			'4.3.9' => array(
				'tar' => array(
					'md5' => 'fd17e827bc9fdc55e967c6a6d741b2a8',
					'sha1' => 'ae74ee3b5341edf35f82bc897af57564ef37925e',
				),
				'zip' => array(
					'md5' => '3b9b0f8897d10b420aff321930e00b06',
					'sha1' => 'ca938630840fd9e44b12dc65ccb1c4739c50730e',
				),
			),
			'4.3.8' => array(
				'tar' => array(
					'md5' => '3081f2fd3f31f70c297d37501c34ed62',
					'sha1' => '120e050460f477f293bc74b213c0e5cd18f28a95',
				),
				'zip' => array(
					'md5' => 'c6c61cad722b7c90608663f79434ee90',
					'sha1' => '8d87507e76c52168b035857c13f89db6c577d6a3',
				),
			),
			'4.3.7' => array(
				'tar' => array(
					'md5' => '86ba73e7dc48fccb3400b61e55b0446e',
					'sha1' => 'c300dca1bda535c3165917814feadd4959c86b89',
				),
				'zip' => array(
					'md5' => '80bb616b4acd8822fe4a07910cc4fc32',
					'sha1' => 'f89e2f29bef02957162914d6a4c367f6472c6468',
				),
			),
			'4.3.6' => array(
				'tar' => array(
					'md5' => '78a69e45e4d35d019978dee541be3aaa',
					'sha1' => '12e7b4cdb1257570e882a6d88000fe582cd0dce3',
				),
				'zip' => array(
					'md5' => 'ff235fe195fa7e015263c8714df6674a',
					'sha1' => 'dc7ad2ff49bee47064d93f5dc3b40eceee844baf',
				),
			),
			'4.3.5' => array(
				'tar' => array(
					'md5' => '445350427d134e6ce14a85e82cf79122',
					'sha1' => '759a1101080de91bd11face1e1e08d5e9160ccd9',
				),
				'zip' => array(
					'md5' => '6198d1c86b319906d93dc878d421870b',
					'sha1' => '6d1985ed3c2b60faa4546d1446985b2ca8e43c1d',
				),
			),
			'4.3.4' => array(
				'tar' => array(
					'md5' => '85f5fb5e05b6a065bbd42ebfaaf2128b',
					'sha1' => '61dc7a616860b1d3c6c61e4b3247d802cbe7bf87',
				),
				'zip' => array(
					'md5' => '1fc6c8a676157f0c9cef215425eca1bf',
					'sha1' => 'b130a6b38d1d6afe06a82b563d7858477ce2072a',
				),
			),
			'4.3.3' => array(
				'tar' => array(
					'md5' => 'ecb6d38804426cfb6aedbb82fde08b5d',
					'sha1' => '0dfab70507014daca86d9b624271eaaa2646683d',
				),
				'zip' => array(
					'md5' => '7e9660163ce7aebeb329431f54bcb04b',
					'sha1' => '94e1ede023ce3beb8f5f043669669749d778915e',
				),
			),
			'4.3.2' => array(
				'tar' => array(
					'md5' => 'ec02e4e91f2f280340d3557f4ecbe1b4',
					'sha1' => '1a74ae2a3dd68c039402a697617916c1f07cc867',
				),
				'zip' => array(
					'md5' => '4bcc3d24774e880a1187d2b55a151485',
					'sha1' => 'fc074769419a2098324222edef53ea6da9043b01',
				),
			),
			'4.3.1' => array(
				'tar' => array(
					'md5' => 'f4a5ba3d8445b9c63b4b67034faae967',
					'sha1' => '5b6973fa00071cc9dd4e1e85166bd715ef6bd07b',
				),
				'zip' => array(
					'md5' => '510b869f28f69de60a334318bd69ffae',
					'sha1' => 'f5245f75fa9e9600847a066402140700c6fe67f1',
				),
			),
			'4.3.0' => array(
				'tar' => array(
					'md5' => '2900c16b1c68153a9d62c85a401435c5',
					'sha1' => '50c2248d169156605e971f0437ace204a0b8dd71',
				),
				'zip' => array(
					'md5' => '7c539c515d7bc8c99d361d66c8e8a269',
					'sha1' => '410dd7caee1542f869cb870d17b7810541b37769',
				),
			),
			'4.2.17' => array(
				'tar' => array(
					'md5' => '9c0f89db8c27da5f549f1c0d35444fef',
					'sha1' => '643ae640ec6ef27b2f84417b076792fe4f5d12e2',
				),
				'zip' => array(
					'md5' => '07a3b9201a9c8c5603bca21b815299da',
					'sha1' => '64ce2dbf8ea282647a4e1cf12f6a58bdd608caf7',
				),
			),
			'4.2.16' => array(
				'tar' => array(
					'md5' => 'c556a17485887463e67ea0771d7914c4',
					'sha1' => '9b382ef4ce9595b3d0ee4a06e2280ed932c70b73',
				),
				'zip' => array(
					'md5' => 'f3f01e41bdfbc275b2f6bc8140224b19',
					'sha1' => 'df7067994622eaa9381662cae51276805b5ca804',
				),
			),
			'4.2.15' => array(
				'tar' => array(
					'md5' => '4411919947516dff193e22e21d9be977',
					'sha1' => '7c1a547d1ce54185da9177560ed50ec599592d8c',
				),
				'zip' => array(
					'md5' => 'c31979410e4cc3c4733c3609175ea264',
					'sha1' => '0e0243cf5c6d7cc7a2a924c4a66be5f84f03f1b6',
				),
			),
			'4.2.14' => array(
				'tar' => array(
					'md5' => '82be9ad41a655d318ba46a7cb86acaaa',
					'sha1' => '52e21caa1d6cf26099ef9bf461056284848ad980',
				),
				'zip' => array(
					'md5' => 'ab2c56a9d871185092d086909d26a437',
					'sha1' => 'b8c1100b3a1469a6b3e0b432034e7ba521941ba8',
				),
			),
			'4.2.13' => array(
				'tar' => array(
					'md5' => '6c96a400c2337a8bf62035785b7cbb5b',
					'sha1' => 'f337c71cb7d7eec20f7a2226c41720e30550276b',
				),
				'zip' => array(
					'md5' => '3db569cc588c66ce69e48508abe1f1a9',
					'sha1' => '5c61cc203dd22a7cb92ef8b3bb73a2e0642e1884',
				),
			),
			'4.2.12' => array(
				'tar' => array(
					'md5' => '853923ea71cdd082a6e7a88f569b6655',
					'sha1' => '3a89ad2482e59b30f0998b021b86a8b2579708ae',
				),
				'zip' => array(
					'md5' => '2b4fd2c72a058f8cfef25d82047744d7',
					'sha1' => 'f7c4f7e9694acc0fc11bf8caef101f2fcd119b7d',
				),
			),
			'4.2.11' => array(
				'tar' => array(
					'md5' => '389f2c0824d83e34ec4c64e5495aa1df',
					'sha1' => 'ef720b8b72ef7e1bc792fb0e2bceba6d49e6142a',
				),
				'zip' => array(
					'md5' => '7c845f54bbfeb77d01bcaf0c73c9b909',
					'sha1' => 'e0712c272465e08ee0772cf65cdf7c1ec0651489',
				),
			),
			'4.2.10' => array(
				'tar' => array(
					'md5' => 'b53a1d9faeff6a872efa9104946cdb87',
					'sha1' => 'ba6fa68267bf924df2f3ddfffee7dac4fc51f800',
				),
				'zip' => array(
					'md5' => 'e600767e695b3b2771623b43dcb6da19',
					'sha1' => '5cbe1109f0e32d6a7a1e9e32d32f3d11784d2edd',
				),
			),
			'4.2.9' => array(
				'tar' => array(
					'md5' => '66a0947ee54b81eae4affa2aca956209',
					'sha1' => 'f6be5d1034ed0d0f10dd3b295423b6b67a26340b',
				),
				'zip' => array(
					'md5' => 'bdc63e4fad72ea82f1908a2335c6b6af',
					'sha1' => 'cf02b8f1a8bea3a5a03f6c1ca48a485490279ace',
				),
			),
			'4.2.8' => array(
				'tar' => array(
					'md5' => '9e3c7c72f836a4406c0ba16a728adbd9',
					'sha1' => '6af5ab97bd8ff5a8ab9c895b3a1b193c3c97e852',
				),
				'zip' => array(
					'md5' => 'bbfd2499e91b5c91fde4189bb3af3693',
					'sha1' => 'c33b977f57fe345d26068fbcdec0c50f7d708710',
				),
			),
			'4.1.15' => array(
				'tar' => array(
					'md5' => 'da3c5819b540c7c21c429fb59f39cfca',
					'sha1' => 'ec67e20fc2e76190bb88e44ca76029337700a25d',
				),
				'zip' => array(
					'md5' => '5b59911d49a2d47f8bbe49153c507ee1',
					'sha1' => '46e198e7b657df89f41fbb9d993532fbea0a9999',
				),
			),
			'4.1.14' => array(
				'tar' => array(
					'md5' => '93d7a8002b556dacb375221a19365057',
					'sha1' => 'da6324786241a5c0a65aac35dbf9f8624c09ea5f',
				),
				'zip' => array(
					'md5' => '0d9ea8baa18d2c509b6c8d862bab7198',
					'sha1' => 'afdf282a5986c421d45ec7072f22efc2177a62db',
				),
			),
			'4.1.13' => array(
				'tar' => array(
					'md5' => '37c6fa87826e518aeba0289958770e1e',
					'sha1' => 'a30c0aab5bc5f4abf3f90b11d5b5c67921489a83',
				),
				'zip' => array(
					'md5' => 'dc60d3ebde680e28c17fadfc89dc9b23',
					'sha1' => '54dab1b04d89928377529f51b4dd30625a4379b2',
				),
			),
			'4.1.12' => array(
				'tar' => array(
					'md5' => '2d39d05638ae65a4e1d0a49b11bf0737',
					'sha1' => '57303b88402c323182cb007a88d7275f90e63baa',
				),
				'zip' => array(
					'md5' => '136020c3a3ce91e8982f89ae3861f8c6',
					'sha1' => '54d970775c4ff2478bb4b6bc4594ff458b91ed42',
				),
			),
			'4.0.13' => array(
				'tar' => array(
					'md5' => '89b27c180bc603f802205996bc3bacd3',
					'sha1' => '27d410298254c326fd28d74c7ab6eee297876882',
				),
				'zip' => array(
					'md5' => 'b4ec45a80d5ef92bc83179004c82d6d8',
					'sha1' => '09acd4869b05ba866fd6825b39c7f9de1b83fd52',
				),
			),
			'3.8.1' => array(
				'tar' => array(
					'md5' => '9b836657ea48ad92f7a9e84918ebe820',
					'sha1' => '493df2c5ca6078622df8a8bf17a31aec302ce99d',
				),
				'zip' => array(
					'md5' => '0000d029d07ac6396a46b4f6ecdace4d',
					'sha1' => 'da958a9296077bd74dc2f7a89c4509cda82b4b32',
				),
			),
			'3.7.1' => array(
				'tar' => array(
					'md5' => '987d83a8d2cef933c4ca5d8c367e4234',
					'sha1' => 'ef8f49b76a87f61f755350b3e77a5f7f8f2ca317',
				),
				'zip' => array(
					'md5' => '0da07cd9c4232905e557d11cd74f4633',
					'sha1' => 'f07f94da5c8fd961d905f3fa197b0ac87c8cbed3',
				),
			),
			'3.6.2' => array(
				'tar' => array(
					'md5' => 'aeb84c0971d3220b598a63a8511f654e',
					'sha1' => '821e0b185f1920bcdd2f5d7a5cf1f195189fb07f',
				),
				'zip' => array(
					'md5' => '9678d138d2f223670798d84a0939d1b2',
					'sha1' => 'dd659a1776b4723eea6eae5deef3a5be83fa1adc',
				),
			),
			'3.5.0' => array(
				'tar' => array(
					'md5' => '5f2cfbc72b18fad602b697e57d7c345f',
					'sha1' => 'be4d11dd52790a51b9670d4d026baf0154529849',
				),
				'zip' => array(
					'md5' => '',
					'sha1' => '',
				),
			),
			'3.3.0' => array(
				'tar' => array(
					'md5' => 'ab23120ad091d7414fb53e7a74e9cce1',
					'sha1' => '41f70b4928c17da625efeb1ddce80c968bf6c24d',
				),
				'zip' => array(
					'md5' => '',
					'sha1' => '',
				),
			),
		);

		return $checksums;
	}
}
