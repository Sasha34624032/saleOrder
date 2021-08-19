$data = Internals\QueueTable::getList([
			// 'limit' => 100,
			'filter' => ['ERROR' => 1],
			'select' => ['ID']
		]);

		while ($item = $data->fetch())
		{
			$areries[] = $item;
			// Internals\QueueTable::delete($item['ID']);
			Internals\QueueTable::update($item['ID'], ['ERROR'=>0]);
			// break;
			
		}
