<?php

namespace Netgen\TagsBundle\Tests\Core\Persistence\Legacy\Tags\Gateway;

use Doctrine\DBAL\DBALException;
use Netgen\TagsBundle\SPI\Persistence\Tags\CreateStruct;
use Netgen\TagsBundle\SPI\Persistence\Tags\SynonymCreateStruct;
use Netgen\TagsBundle\SPI\Persistence\Tags\Tag;
use Netgen\TagsBundle\SPI\Persistence\Tags\UpdateStruct;
use PDOException;
use RuntimeException;
use eZ\Publish\Core\Persistence\Legacy\Tests\TestCase;
use Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway;
use Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion;

/**
 * Test case for Exception Conversion.
 */
class ExceptionConversionTest extends TestCase
{
    /**
     * @var \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion
     */
    protected $exceptionConversion;

    /**
     * Mocked tags gateway instance.
     *
     * @var \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway
     */
    protected $gateway;

    /**
     * Sets up the test suite.
     */
    public function setUp()
    {
        parent::setUp();

        $this->gateway = $this->createMock(Gateway::class);
        $this->exceptionConversion = new ExceptionConversion($this->gateway);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::__construct
     */
    public function testConstructor()
    {
        $test = new ExceptionConversion($this->gateway);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getBasicTagData
     */
    public function testGetBasicTagDataWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getBasicTagData')
            ->with(1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getBasicTagData(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getBasicTagData
     */
    public function testGetBasicTagDataWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getBasicTagData')
            ->with(1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getBasicTagData(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getBasicTagDataByRemoteId
     */
    public function testGetBasicTagDataByRemoteIdWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getBasicTagDataByRemoteId')
            ->with('test')
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getBasicTagDataByRemoteId('test');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getBasicTagDataByRemoteId
     */
    public function testGetBasicTagDataByRemoteIdWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getBasicTagDataByRemoteId')
            ->with('test')
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getBasicTagDataByRemoteId('test');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getFullTagData
     */
    public function testGetFullTagDataWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getFullTagData')
            ->with(1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getFullTagData(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getFullTagData
     */
    public function testGetFullTagDataWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getFullTagData')
            ->with(1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getFullTagData(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getFullTagDataByRemoteId
     */
    public function testGetFullTagDataByRemoteIdWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getFullTagDataByRemoteId')
            ->with('test')
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getFullTagDataByRemoteId('test');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getFullTagDataByRemoteId
     */
    public function testGetFullTagDataByRemoteIdWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getFullTagDataByRemoteId')
            ->with('test')
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getFullTagDataByRemoteId('test');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getFullTagDataByKeywordAndParentId
     */
    public function testGetFullTagDataByKeywordAndParentIdWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getFullTagDataByKeywordAndParentId')
            ->with('test', 1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getFullTagDataByKeywordAndParentId('test', 1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getFullTagDataByKeywordAndParentId
     */
    public function testGetFullTagDataByKeywordAndParentIdWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getFullTagDataByKeywordAndParentId')
            ->with('test', 1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getFullTagDataByKeywordAndParentId('test', 1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getChildren
     */
    public function testGetChildrenWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getChildren')
            ->with(1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getChildren(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getChildren
     */
    public function testGetChildrenWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getChildren')
            ->with(1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getChildren(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getChildrenCount
     */
    public function testGetChildrenCountWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getChildrenCount')
            ->with(1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getChildrenCount(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getChildrenCount
     */
    public function testGetChildrenCountWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getChildrenCount')
            ->with(1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getChildrenCount(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getTagsByKeyword
     */
    public function testGetTagsByKeywordWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getTagsByKeyword')
            ->with(1, 'eng-GB')
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getTagsByKeyword(1, 'eng-GB');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getTagsByKeyword
     */
    public function testGetTagsByKeywordWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getTagsByKeyword')
            ->with('test', 'eng-GB')
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getTagsByKeyword('test', 'eng-GB');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getTagsByKeywordCount
     */
    public function testGetTagsByKeywordCountWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getTagsByKeywordCount')
            ->with('test', 'eng-GB')
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getTagsByKeywordCount('test', 'eng-GB');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getTagsByKeywordCount
     */
    public function testGetTagsByKeywordCountWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getTagsByKeywordCount')
            ->with('test', 'eng-GB')
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getTagsByKeywordCount('test', 'eng-GB');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getSynonyms
     */
    public function testGetSynonymsWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getSynonyms')
            ->with(1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getSynonyms(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getSynonyms
     */
    public function testGetSynonymsWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getSynonyms')
            ->with(1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getSynonyms(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getSynonymCount
     */
    public function testGetSynonymCountWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getSynonymCount')
            ->with(1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getSynonymCount(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::getSynonymCount
     */
    public function testGetSynonymCountWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('getSynonymCount')
            ->with(1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->getSynonymCount(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::moveSynonym
     */
    public function testMoveSynonymWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('moveSynonym')
            ->with(1, array())
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->moveSynonym(1, array());
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::moveSynonym
     */
    public function testMoveSynonymWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('moveSynonym')
            ->with(1, array())
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->moveSynonym(1, array());
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::create
     */
    public function testCreateWithDBALException()
    {
        $createStruct = new CreateStruct();

        $this->gateway
            ->expects($this->once())
            ->method('create')
            ->with($createStruct)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->create($createStruct);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::create
     */
    public function testCreateWithPDOException()
    {
        $createStruct = new CreateStruct();

        $this->gateway
            ->expects($this->once())
            ->method('create')
            ->with($createStruct)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->create($createStruct);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::update
     */
    public function testUpdate()
    {
        $updateStruct = new UpdateStruct();

        $this->gateway
            ->expects($this->once())
            ->method('update')
            ->with($updateStruct, 1);

        $this->assertNull($this->exceptionConversion->update($updateStruct, 1));
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::update
     */
    public function testUpdateWithDBALException()
    {
        $updateStruct = new UpdateStruct();

        $this->gateway
            ->expects($this->once())
            ->method('update')
            ->with($updateStruct, 1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->update($updateStruct, 1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::update
     */
    public function testUpdateWithPDOException()
    {
        $updateStruct = new UpdateStruct();

        $this->gateway
            ->expects($this->once())
            ->method('update')
            ->with($updateStruct, 1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->update($updateStruct, 1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::createSynonym
     */
    public function testCreateSynonymWithDBALException()
    {
        $createStruct = new SynonymCreateStruct();
        $tag = new Tag();

        $this->gateway
            ->expects($this->once())
            ->method('createSynonym')
            ->with($createStruct, array($tag))
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->createSynonym($createStruct, array($tag));
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::createSynonym
     */
    public function testCreateSynonymWithPDOException()
    {
        $createStruct = new SynonymCreateStruct();
        $tag = new Tag();

        $this->gateway
            ->expects($this->once())
            ->method('createSynonym')
            ->with($createStruct, array($tag))
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->createSynonym($createStruct, array($tag));
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::convertToSynonym
     */
    public function testConvertToSynonymWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('convertToSynonym')
            ->with(1, array())
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->convertToSynonym(1, array());
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::convertToSynonym
     */
    public function testConvertToSynonymWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('convertToSynonym')
            ->with(1, array())
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->convertToSynonym(1, array());
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::transferTagAttributeLinks
     */
    public function testTransferTagAttributeLinks()
    {
        $this->gateway
            ->expects($this->once())
            ->method('transferTagAttributeLinks')
            ->with(1, 2);

        $this->assertNull($this->exceptionConversion->transferTagAttributeLinks(1, 2));
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::transferTagAttributeLinks
     */
    public function testTransferTagAttributeLinksWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('transferTagAttributeLinks')
            ->with(1, 2)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->transferTagAttributeLinks(1, 2);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::transferTagAttributeLinks
     */
    public function testTransferTagAttributeLinksWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('transferTagAttributeLinks')
            ->with(1, 2)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->transferTagAttributeLinks(1, 2);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::moveSubtree
     */
    public function testMoveSubtree()
    {
        $this->gateway
            ->expects($this->once())
            ->method('moveSubtree')
            ->with(array(), array());

        $this->assertNull($this->exceptionConversion->moveSubtree(array(), array()));
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::moveSubtree
     */
    public function testMoveSubtreeWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('moveSubtree')
            ->with(array(), array())
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->moveSubtree(array(), array());
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::moveSubtree
     */
    public function testMoveSubtreeWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('moveSubtree')
            ->with(array(), array())
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->moveSubtree(array(), array());
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::deleteTag
     */
    public function testDeleteTag()
    {
        $this->gateway
            ->expects($this->once())
            ->method('deleteTag')
            ->with(1);

        $this->assertNull($this->exceptionConversion->deleteTag(1));
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::deleteTag
     */
    public function testDeleteTagWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('deleteTag')
            ->with(1)
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->deleteTag(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::deleteTag
     */
    public function testDeleteTagWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('deleteTag')
            ->with(1)
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->deleteTag(1);
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::updateSubtreeModificationTime
     */
    public function testUpdateSubtreeModificationTime()
    {
        $this->gateway
            ->expects($this->once())
            ->method('updateSubtreeModificationTime')
            ->with('/1/2');

        $this->assertNull($this->exceptionConversion->updateSubtreeModificationTime('/1/2'));
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::updateSubtreeModificationTime
     */
    public function testUpdateSubtreeModificationTimeWithDBALException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('updateSubtreeModificationTime')
            ->with('/1/2')
            ->willThrowException(new DBALException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->updateSubtreeModificationTime('/1/2');
    }

    /**
     * @covers \Netgen\TagsBundle\Core\Persistence\Legacy\Tags\Gateway\ExceptionConversion::updateSubtreeModificationTime
     */
    public function testUpdateSubtreeModificationTimeWithPDOException()
    {
        $this->gateway
            ->expects($this->once())
            ->method('updateSubtreeModificationTime')
            ->with('/1/2')
            ->willThrowException(new PDOException());

        $this->expectException(RuntimeException::class);

        $this->exceptionConversion->updateSubtreeModificationTime('/1/2');
    }
}
